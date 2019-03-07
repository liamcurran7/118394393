<?php
session_start();
$fullNameValue = "" ;
$totalValue2="" ;
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal']= $totalValue2 ;
/**
 * Allocate the mobile number session variable to a text
 */
?>
<!DOCTYPE html>
<html>
<head>
    <script>

</script>
    <title> eBusiness 2 </title>
</head>
<body background = https://images.pexels.com/photos/235994/pexels-photo-235994.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500>
    <div class ="form">
        <form name ="Details" method ="post" action= "eBUS3.php">
            <center>
               <! Creating the table that contains fields for personal details ->
                <table style = cellspacing:40>                     <tr>
                        <td><b></b></td>
                        <td><b style = font-size:35px> Enter in your details below</b></td>
                    </tr>
                    
                    <tr>
                         <td> Name </td>
                         <td><input type="text" id="txtName" name="txtName" value="" required="" /> </td>
                    </tr>
                    <br> <br>
                     <tr>
                         <td> Phone Number </td>
                         <td><input type="text" id="txtNum" name="txtNum" value="" required /> </td>
                     </tr> <br> <br>
       
                    <tr>
                         <td> Password </td>
                         <td><input type="text" id="txtPassword" name="txtPassword" value="" required /> </td>
                    </tr>
                    
       
                    <tr>
                         <td><input type="Hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /> </td>
                    </tr>
       
                </table>
         </center>
       
       
            <center>  
        <input type="submit" name ="btnContinue" id="btnContinue" onclick="" value="Continue" />
       
            </center>
    </div>
</form>
    </body>
    </html>