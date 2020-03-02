<?php
define("REQUIRED", "Required: ");
define("NOT_VALID", "Not Valid: ");

// echo "Complete remove session";

function clean_string($string)
{
   $bad = array("content-type", "bcc:", "to:", "cc:", "href");
   return str_replace($bad, "", $string);
}

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function validate_name($name)
{
   $string_exp = "/^[A-Za-z .'-]+$/";
   if (!preg_match($string_exp, $name)) {
      return array('valid' => false, "msg" => "must contain letters only.");
   } else {
      return array('valid' => true, "msg" => "");
   }
}
function validate_phone_number($phone)
{
   // Allow +, - and . in phone number
   // $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
   // Remove "-" and "+" from number
   $bad = array(" ", "-", "+");
   $phone_to_check = str_replace($bad, "", $phone);

   // echo $phone_to_check."<br>";
   // Check the lenght of number
   // This can be customized if you want phone number from a specific country
   // $regex = '/^[0-9]+$/';
   if (!filter_var($phone_to_check, FILTER_VALIDATE_INT)) {
      // echo('stringfdssssssssss');
      // die;
      return array('valid' => false, "msg" => "must contain digits 0-9 only.");
   } elseif (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
      return array('valid' => false, "msg" => "must be between 10 and 14 digits.");
   } else {
      return array('valid' => true, "msg" => "");
   }
}
function validate_messege($msg,$length){
   if(strlen($msg) < $length ){
      return array('valid' => false, "msg" => "message is too short .");
   }else{
      return array('valid' => true, "msg" => "");
   }
}

function validate_date($date, $format = 'Y-m-d')
{
   $d = DateTime::createFromFormat($format, $date);

   return $d && $d->format($format) === $date;
}


function died()
{

   global $html_footer, $html_head, $error;

   $error_all = "";
   foreach ($error as $err) {
      $error_all .= '<tr><td class="error"><img class="asterisk" src="asterisk.png">' . $err . '</td></tr>';
   }
   $page = $html_head .
      '  <div class="container">
            <div class="header">
               <h3 class="h4">We are very sorry, but there were error(s) found with the form you submitted.</h4>
            </div>
            <div class="main"> 

               <div class="table-responsive">
                  <table class="table table-striped ">
                     ' . $error_all . '
                     </table>
               </div>
                     <p class="p mt-5 mb-5 text-center">Please go <a href="' . $_SERVER['HTTP_REFERER'] . '">back</a> and fix these errors.</p>
            </div>
            
         </div>'
      . $html_footer;

   echo $page;
   die();
}

function error_msg($msg)
{
   return "<div class='error-msg'><img class='right-arrow' src='right-arrow.png'>" . $msg . "</div>";
}


// will upload attachment file to server
function test_File($file)
{
   // print_r($file);
   global $uploadedFile;

   //  $err = array();

   // Upload attachment file
   if (!empty($file["name"])) {

      // File path config
      // make sure submitted file is not too large, can't be larger than 1 MB
      if ($file['size'] > (1024000)) {
         return array('valid' => false, "msg" => "the File must be less than 1 MB in size.");
      }
      $targetDir = "../app/uploads/";
      $fileName = time() . basename($file["name"]);
      $targetFilePath = __DIR__ . '/' . $targetDir  . $fileName;
      //   echo $targetFilePath;
      $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

      // Allow certain file formats
      $allowTypes = array('pdf','PDF', 'doc','DOC', 'docx','DOCX', 'rtf','RTF','txt','TXT');
      if (in_array($fileType, $allowTypes)) {
         // Upload file to the server
         // make sure the 'uploads' folder exists if not, create it
         if (!is_dir($targetDir)) {
            mkdir($targetDir);
         }

         if (move_uploaded_file($file["tmp_name"], $targetFilePath)) {
            $uploadedFile .= $fileName;
         }else{
            return array('valid' => false, "msg" => "Sorry,  Failed while uploading the file.");
         }



      } else {
         return array('valid' => false, "msg" => "Sorry, only PDF, DOC,DOCX,RTF and TXT files are allowed to upload.");
      }
   }
   return array('valid' => true, "msg" => "");
}
