<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
    <a href="home.php">HOME</a>|
    <a href="about.php">ABOUT</a> |
    <a href="contact.php">CONTACT</a> |
    <a href="./auth/login.php">LOGIN</a> |
     <!-- Go outside file url to inside file url => use ./ -->
</body>
<h1>Home Page</h1>
<?php 
include("content.php"); // contiue to run except this conent.php if error occur
// require("content.php"); // not contiue to run if error occur
// include_once("content.php"); // incluce_once can run only one time 
// require_once("content.php"); //// require_once can run only one time
 ?>
</html>