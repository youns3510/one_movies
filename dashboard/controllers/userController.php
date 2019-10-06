<?php
if (!isset($_SESSION)) {
    session_start([
        'cookie_httponly' => true,
        'cookie_secure' => true
    ]);
}
// echo "++++----------------------------------------------------------<br>".$_SERVER['DOCUMENT_ROOT'];
// echo "++++----------------------------------------------------------<br>".realpath(__DIR__.'/../includes/db.php');

include_once(__DIR__ . '/../includes/db.php');
//echo "++++----------------------------------------------------------<br>".dirname(__DIR__.'/sendmailController.php');
require(__DIR__ . '/sendmailController.php');

$errors = array();
if (isset($_POST['register'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = "Username is required";
    } else {
        $username = test_input($_POST['username']);
        if (validate_username($username) == false) {
            $errors['username'] = "invalid username .<br> [a-z, A-Z, 0-9, _ ] only valid .";
        };
        //echo $username.'<br>';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = "Password is required";
    } else {
        $password = test_input($_POST['password']);
        //echo $password.'<br>';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
        }
        // echo $email.'<br>';
    }
    if (empty($_POST['phone'])) {
        $errors['phone'] = "Phone is required";
    } else {
        $phone = test_input($_POST['phone']);
        if (validate_phone_number($phone) == false) {
            $errors['phone'] = "Invalid phone number";
        }

        // echo $phone.'<br>';
    }


    if (count($errors) == 0) {
        $token = bin2hex(random_bytes(50));
        $check_qeury = "SELECT * FROM `users` WHERE `username` ='$username'  OR `email`='$email';";
        $check_res = $con->query($check_qeury);
        if ($check_res->num_rows > 0) {
            $_SESSION['action'] = true;
            $_SESSION['option'] = 'error';
            $_SESSION['message'] = 'Sorry..<br> This account is already exist.';
        } else {
            $q = "INSERT INTO `users`(username,email,phone,token)VALUES('$username','$email','$phone','$token');";
            $result = $con->query($q);
            // echo $q.'<br>';
            if ($result) {
                // echo 'success';
                $q = "INSERT into `usr_pass`(user_id,password)VALUES('$con->insert_id', '" . password_hash($password, PASSWORD_DEFAULT) . "')";
                $result = $con->query($q);
                if ($result) {
                    send_verify_link($email, $token);
                    $_SESSION['action'] = true;
                    $_SESSION['option'] = 'success';
                    $_SESSION['message'] = "Successfully registerd <br> please check your email to verify your account";
                } else {
                    // echo "passoword".$con->error;
                    $delete = "DELETE * FROM `users` WHERE `id`='$con->insert_id';";
                    $con->query($delete);
                }
            }
        }
        // else {
        //     echo "user".$con->error;
        // }
    } else {
        $err = '';
        $_SESSION['action'] = true;
        $_SESSION['option'] = 'error';
        foreach ($errors as $error) {
            $err .= "* " . $error . '</br>';
        }
        $_SESSION['message'] = '!Opps..<br>' . $err;
    }
}
// verfiy user account
if (isset($_GET['v_token']) && !empty($_GET['v_token'])) {
    $token = test_input($_GET['v_token']);
    $q = "UPDATE  `users` SET `verified`= '1' where `token` = '$token';";
    $result = $con->query($q);
    if ($result) {
        $_SESSION['action'] = true;
        $_SESSION['option'] = 'success';
        $_SESSION['message'] = "Your Account has been verified successfully.";


        //     <script>
        //     setTimeout(function () {
        //        window.location = '/users/myaccount.php';
        //     }, 5000);
        //  </script>


    }
}

// login proccess
if (isset($_POST['login'])) {
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    // echo $username.'<br>'.$password;
    $query = "SELECT * FROM `users` WHERE username='$username';";
    $result = $con->query($query);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $user_id = $row['id'];

        $query = "SELECT * FROM `usr_pass` WHERE `user_id`='$user_id';";
        $res = $con->query($query);
        if ($res->num_rows == 1) {
            $r = $res->fetch_assoc();
            if (password_verify($password, $r['password'])) {
                $_SESSION["auth"] = 'user';
                $_SESSION['username'] = $username;


                header("Location: /users/myaccount.php");

                $_SESSION['action'] = true;
                $_SESSION['option'] = 'success';
                $_SESSION['message'] = 'successfully Login';
            } else {
                $_SESSION['action'] = true;
                $_SESSION['option'] = 'error';
                $_SESSION['message'] = 'OOPs....password is incorrect.';
            }
        }
    } else {
        $_SESSION['action'] = true;
        $_SESSION['option'] = 'error';
        $_SESSION['message'] = 'OOPs....username is incorrect.';
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validate_phone_number($phone)
{
    // Allow +, - and . in phone number
    $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    // Remove "-" from number
    $phone_to_check = str_replace("-", "", $filtered_phone_number);
    // Check the lenght of number
    // This can be customized if you want phone number from a specific country
    if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        return false;
    } else {
        return true;
    }
}

function validate_username($str)
{
    $allowed = array("_"); // you can add here more value, you want to allow.
    if (ctype_alnum(str_replace($allowed, '', $str))) {
        return true;
    }
    return false;
}
// username
// password
// email
// phone
