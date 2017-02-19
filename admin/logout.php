<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['person_id']);
session_destroy();
header('location: index.php');
?>