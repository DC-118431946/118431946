 <?php


session_start();
$fullNameValue = "";
$totalValue2 = "";

/* create a session variable for the mobile number
 * 
 */
$totalValue = $_POST['txtTotal'];
        $_SESSION['txtName'] = $fullNameValue;
        $_SESSION['txtTotal'] = $totalValue2;
        
        /*
         * alloate the session variable to a textbox
         * 
         */
        
        ?>
        
        <!DOCTYPE html>
        <html>
            
            <head>
                <title>eBusiness2</title>
                <link rel="stylesheet" type="text/css" href="Ebus2.css">
            </head>
        <body>
        <div class="form">
            <form name="Details" method="post" action="ebus3.php">
                
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required/></td>
                        </tr>
                         <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNumber" value="" required/></td>
                        </tr>
                         <tr>
                            <td>Password</td>
                            <td><input type="password" id="myInput"  value="" required/><br>
                                <input type="checkbox" onclick="myFunction()">Show Password
                                
                        <script>
                            function myFunction() {
                                var x = document.getElementById("myInput");
                                if (x.type === "password"){
                                    x.type = "text";
                                } else {
                                    x.type = "password"
                                }
                            }
                            </script>
                            
                        </tr>
                         <tr>
                            
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                        
                    </table>
                </center>
                <center>
                    
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                <a href="ebus1.php" class="previous">&laquo; Back</a>



            </form>
                
        </html>            
