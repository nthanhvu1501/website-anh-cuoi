<?php
session_start();
unset($_SESSION['admin']);
unset($_SESSION['error_login']);
header('Location: ../index.php');
exit;