<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";

$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['TXTtOTAL'] = $totalValue2;

?>

<!DOCTYPE   HTML>
<html>
    <head>
        <title> eBusiness 2 </title 
    </head>
    <body>
        <div class ="form">
            <form name ="Details" method ="post" action ="ebus3.php">
                <center>
                    <table cellspacing ="10">
                        <tr>
                            <td> <b> </b> </td>
                            <td><b> Enter your details below</b> </td>
                        </tr>
                        <tr>
                            <td>Name </td>
                            <td> <input type ="text" id ="txtName" name ="txtName" value ="" /></td>
                        </tr>
                        <tr>
                            <td> Phone Number</td>
                            <td><input type ="text" id ="txtNum" name ="txtName" value ="" /></td>
                            
                        <tr><td>Password</td>
                            <td><input type ="text" id ="txtPassword" name ="txtPassword" value ="" /></td>
                        </tr>
                        <tr>
                            <td> <input type ="hidden" id ="txtTotal" name ="txtTotal" value ="<?php echo $totalValue;?>"/></td>
                            
                        </tr>
                    </table>
                </center>
                <center>
                    <input type ="submit" name ="btnContinue" id ="btnContinue" onclick ="" value ="Continue"/>
                </center>
        </div>
</form>
            
    </body>
</html>



