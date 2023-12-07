<?php
echo "<h1>Data Encryption</h1>";
$name = "chozin"; //plain text
$firstName = md5($name);
echo $firstName;
$secName = sha1($name);
echo "<br>$secName";
$thirdName = crypt($name, 'ch');
echo "<br>$thirdName";

echo "<h1>Password Hash</h1>";
$password = 'abc123';
echo password_hash($password, PASSWORD_BCRYPT)."<br>";
$hashPassword = password_hash($password, PASSWORD_DEFAULT);
echo password_verify($password, $hashPassword) ? "<b>Same PWD</b>" : "<b>Wong PWD</b>";