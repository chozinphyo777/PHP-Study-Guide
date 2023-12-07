<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
    <?PHP
    $errorName = $errorEmail = $errorPhone = $errorAddress = "";
    $name = $email = $phone = $address = "";
    if(isset($_POST['saveBtn'])){
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userPhone = $_POST['phone'];
        $userAddress = $_POST['address'];
        if($userName == null || $userName == "" || empty($userEmail)){
            $errorName = "Name field is required";
        }
        if($userEmail == null || $userEmail=="" || empty($userEmail)){
            $errorEmail = "Email field is required";
        }
        if($userPhone == null || $userPhone=="" || empty($userPhone)){
            $errorPhone = "Phone field is required";
        }
        if($userAddress == null || $userAddress=="" || empty($userAddress)){
            $errorAddress = "Address field is required";
        }
        if($userName != null && $userEmail != null && $userPhone != null && $userAddress != null){
            $name = $userName."<br>";
            $email = $userEmail ."<br>";
            $phone = $userPhone ."<br>";
            $address = $userAddress ."<br>";
        }
    }
    ?>
    <div class="container my-5">
        <div class="col-md-6 offset-md-3 shadow">
            <div class="my-3 mx-5">
            <?php
            echo  $name;
            echo $email;
            echo $phone;
            echo $address;

            ?>
            </div>
            <form method="post" class="py-3">
                <div class="my-3 mx-5">
                    <label for="">Name</label>
                    <input type="text" name="name"  class="form-control" placeholder="Enter Name">
                    <small class=" text-danger "><?php echo $errorName ?></small>
                </div>
                <div class="my-3 mx-5">
                    <label for="">Email</label>
                    <input type="email" name="email"  class="form-control" placeholder="Enter Email">
                    <small class=" text-danger "><?php echo $errorEmail ?></small>
                </div>
                <div class="my-3 mx-5">
                    <label for="">Phone</label>
                    <input type="text" name="phone"  class="form-control" placeholder="Enter Phone">
                    <small class=" text-danger "><?php echo $errorPhone ?></small>
                </div>
                <div class="my-3 mx-5">
                    <label for="">Address</label>
                    <textarea name="address" id="" cols="30" rows="10" class="form-control" placeholder="Enter Address"></textarea>
                    <small class=" text-danger "><?php echo $errorAddress ?></small>
                </div>
                <div class="my-3 mx-5">
                    <input type="submit" value="Save" name="saveBtn" class="btn btn-dark">
                </div>
            </form>
        </div>
    </div>
   
    
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
</html>