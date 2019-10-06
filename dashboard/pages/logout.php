<?php
 if (!isset($_SESSION)) {
     session_start([
    'cookie_httponly' => true,
    'cookie_secure' => true
]);
 }
if (session_destroy()) {
    header("Location: /dashboard/pages/login.php");
}
?>