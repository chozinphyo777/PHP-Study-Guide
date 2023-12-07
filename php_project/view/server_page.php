<?php
include_once("../layout/header.php");
?>

<div style="margin-left: 50px;">
    <p>This is Server Page</p>

    <pre>
    <?php 
    var_dump($_REQUEST);
    echo " <br>Name : ". $_REQUEST['name'];
    echo " <br>Position : ". $_REQUEST['position'];
    ?>
    
</div>


<?php
include_once("../layout/footer.php");
?>