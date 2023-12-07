<?php
include_once("../layout/header.php");
?>

<h1>This is About Page</h1>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="userPorfile" id="">
    <input type="submit" value="Submit" name="storeProfile">
</form>
<?php
    if(isset($_POST['storeProfile'])){
    echo "<pre>";
    var_dump($_FILES['userPorfile']);
    $imgName = $_FILES['userPorfile']['name'];
    $tmpName = $_FILES['userPorfile']['tmp_name'];
    //var_dump($tmpName);
    $targetFile = '../assets/images/' . $imgName;
    if( move_uploaded_file($tmpName, $targetFile)){
        move_uploaded_file($tmpName, $targetFile);
        echo "<br>success";
    }
    else{
        echo "error";
    }
    
    } 
 ?>
<?php
include_once("../layout/footer.php");
?>