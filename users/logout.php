<?php
 if (!isset($_SESSION)) {
     session_start([
    'cookie_httponly' => true,
    'cookie_secure' => true
]);
 }
if (session_destroy()) {
     if (!isset($_SESSION)) {
     session_start([
    'cookie_httponly' => true,
    'cookie_secure' => true
]);
 }
    $_SESSION['action'] = true;
    $_SESSION['option'] = 'success';
    $_SESSION['message'] = 'successfully Log out';
    header("Location: /");
}
?>