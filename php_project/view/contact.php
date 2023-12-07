<?php
include_once("../layout/header.php");
?>

<h1>This is Contact Page</h1>
<a href="server_page.php?name=cho&position=internship">Sent Contact</a>

<br>
<br>

<h3>Send data using GET method</h3>
<form action="server_page1.php" method="GET">
    Product Name :
    <input type="text" name = "pname">
    Price :
    <input type="text" name = "price">
    <input type="submit">
</form>
<br>

<h3>Send data using POST method</h3>
<form action="server_page2.php" method="POST" enctype="multipart/form-data">
    Product Name :
    <input type="text" name = "pname">
    Price :
    <input type="text" name = "price">
    <br><br>
    <input type="file" name="image">
    <br><br>
    <input type="submit" name="submitData">
</form>




<?php
include_once("../layout/footer.php");
?>