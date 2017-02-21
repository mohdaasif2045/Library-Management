<?php
session_start();
unset($_SESSION['username']);
// Jump to login page
header('Location: user_interface.php');
?>
