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
    <title> eBusiness 2 </title>
</head>
<body background = http://goss.rs/wp-content/uploads/2014/06/JOES-Website-Background-light-grey.jpg>
    <div class ="form">
        <form name ="Details" method ="post" action= "eBUS3.php">
            <center>
                <table cellspacing ="50" style = font-size:25px>
                    <tr>
                        <td><b></b></td>
                        <td><b> Enter in your details below</b></td>
                    </tr>
       
                    <tr>
                         <td> Name </td>
                         <td><input type="text" id="txtName" name="txtName" value="" required /> </td>
                    </tr>
       
                     <tr>
                         <td> Phone Number </td>
                         <td><input type="text" id="txtNum" name="txtNum" value="" required /> </td>
                    </tr>
       
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
        <script>
function myFunction() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("txtNum").value;

  // If x is Not a Number or less than one or greater than 10
  if (isNaN(x) || x < 1 || x > 10) {
    text = "Input not valid";
  } else {
    text = "Input OK";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>
    </body>
    </html>