<?php
include include '../classes/Product.php';
$user = new User;

session_start();
session_unset();
session_destroy();

header("location: login.php");
exit;