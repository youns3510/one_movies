<?php
// var_dump($_SERVER);
require_once("functions.php");
if (isset($_POST['submit'])) {

   // EDIT THE 2 LINES BELOW AS REQUIRED
   $email_to = "youns3510@gmail.com";
   $websiteName = "One Movies";
   $email_subject = "Contact Us|" . $websiteName;

   // validation expected data exists
   $fname = test_input($_POST['fname']);
   $lname = test_input($_POST['lname']);
   $email = test_input($_POST['email']);
   $subject = test_input($_POST['subject']);
   $message = test_input($_POST['message']);

   $label_fname = "First Name";
   $label_lname = "Last Name";
   $label_email = "Email ";
   $label_subject = "Subject";
   $label_message = "Message";


   $chk_fname = validate_name($fname);
   $chk_lname = validate_name($lname);
   $chk_subject = validate_messege($subject, $length = 10);
   $chk_message = validate_messege($message, $length = 50);


   //  validation
   $error = array();

   if (empty($fname)) {
      $error['fname'] = REQUIRED . $label_fname;
   } elseif ($chk_fname['valid'] == false) {
      $error['fname'] = NOT_VALID . $label_fname . error_msg($chk_fname['msg']);;
   }

   if (empty($lname)) {
      $error['lname'] = REQUIRED . $label_lname;
   } elseif ($chk_lname['valid'] == false) {
      $error['lname'] = NOT_VALID . $label_lname . error_msg($chk_lname['msg']);;
   }

   if (empty($email)) {
      $error['email'] = REQUIRED . $label_email;
   } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error['email'] = NOT_VALID . $label_email;
   }

   if (empty($subject)) {
      $error['subject'] = REQUIRED . $label_subject;
   } elseif ($chk_subject['valid'] == false) {
      $error['subject'] = NOT_VALID . $label_subject . error_msg($chk_subject['msg']);
   }

   if (empty($message)) {
      $error['message'] = REQUIRED . $label_message;
   } elseif ($chk_message['valid'] == false) {
      $error['message'] = NOT_VALID . $label_message . error_msg($chk_message['msg']);
   }










   ob_start();
   include_once(__DIR__ . '/header.php');
   $html_head = ob_get_clean();


   ob_start();
   include_once(__DIR__ . '/footer.php');
   $html_footer = ob_get_clean();





   if (count($error) > 0) {
      died();
   }

   $email_message = $html_head . '     
     
      <div class="container">
         <div class="header">
            <h3 class="h3">Client Information </h3>
         </div>
         <div class="main">
            <div class="table-responsive">
            <table class="table table-striped ">
               <tr>
                  <th> Name</th>
                  <td>' . clean_string($fname) . ' ' . clean_string($lname) . '</td>
               </tr>
               
               <tr>
               <th>' . $label_email . '</th>
                  <td>' . clean_string($email) . '</td>
               </tr>
               <tr>
               <th>' . $label_subject . '</th>
                  <td>' . clean_string($subject) . '</td>
               </tr>
               <tr>
               <th>' . $label_message . '</th>
                  <td>' . clean_string($message) . '</td>
               </tr>
            </table>
            </div>
         </div></div>
         ' . $html_footer;




   
   
   // echo $email_message;
   // die();

   $headers = "From: " . $email . "\r\n";
   $headers .= "Reply-To: " . $email . "\r\n";
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

   $send = @mail($email_to, $email_subject, $email_message, $headers);

   if ($send) {
      header('location:/Mail/thanks.php');
   }
}
