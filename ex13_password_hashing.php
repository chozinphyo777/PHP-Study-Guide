<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Process</title>
</head>
<body>
  <form action="" method="post">
    Email <br>
    <input type="email" name="userEmail" id=""> <br><br>
    Password <br>
    <input type="password" name="userPassword" id=""><br><br>
    <input type="submit" value="Login In" name = "loginBtn">
  </form>  
  <?php
  
  //$hashPassword = password_hash('admin123', PASSWORD_BCRYPT);
  //var_dump(password_verify('dd', $hashPassword));

  $password = '$2y$10$JCTs61ZujLnwmgXinXD7Yug.CmioA3IFnCavhbg5EWfNtwrSlhJLO'; //admin123
  $email = 'admin@gmail.com';
  if(isset($_POST['loginBtn'])){
      $userEmail = $_POST['userEmail'];
      $userPassword = $_POST['userPassword'];

      if($email == $userEmail && password_verify($userPassword,$password)){
      echo "<br>Login Success!";
      }
      else{
        echo "Login Fail! Try Again....";
      }
    
  }
?>

</body>
</html>