<?php
include_once("../layout/header.php");
?>

<div style="margin-left: 50px;">
    <p>This is Server Page</p>
    <pre>
    <?php 
    var_dump($_POST);
    
    var_dump($_FILES);
    echo " Product Name : ". $_POST['pname'];
    echo "<br> Product Price : ".$_POST['price'];
    ?>
</div>


<?php
include_once("../layout/footer.php");
?>