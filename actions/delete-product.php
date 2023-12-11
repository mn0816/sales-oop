<?php
include "../classes/User.php";
session_start();

// Create an obj
$user = new User;

$products->delete($_SESSION['id']);
