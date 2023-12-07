<?php
include_once("../layout/header.php");
?>

<div style="margin-left: 50px;">
    <p>This is Server Page</p>
    <pre>
    <?php 
    var_dump($_GET);
    echo " Product Name : ". $_GET['pname'];
    echo "<br> Product Price : ".$_REQUEST['price'];
    ?>
</div>


<?php
include_once("../layout/footer.php");
?>