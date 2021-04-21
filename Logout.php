<?php
session_start();
session_unset('user');// single
session_destroy();// all delete
header('location:Login1.php');
?>