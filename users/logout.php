<?php
session_start();
if (session_destroy()) {
    session_start();
    $_SESSION['action'] = true;
    $_SESSION['option'] = 'success';
    $_SESSION['message'] = 'successfully Log out';
    header("Location: /");
}
?>