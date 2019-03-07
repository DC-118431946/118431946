<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Ebus3.css">    
    </head>
    <body>
        
        <!-- //strating the session to get the session variable from last page -->
    <center>    
<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "The name is :".$fullNameValue.".";
echo "<br></br>";
echo "The total value is : ".$totalValue2.".";
?>
    
         <div>
        <br>
        <a href="Ebus2.php" class="previous">&laquo; Back</a>
        </div>
    </center>
    
</body>
</html
