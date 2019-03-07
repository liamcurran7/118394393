<!DOCTYPE html>
<html>
    <body style = font-size:30px;text-align:center; background = https://images.pexels.com/photos/235994/pexels-photo-235994.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500>
    <!-- //Starting the session to get the session variable from last page-->
    <h1> Summary Of Purchase</h1>
 <?php
 
 session_start () ;
 $totalValue2 = $_POST ['txtTotal'];
 $fullNameValue= $_POST ['txtName'];

 echo "The name is : ".$fullNameValue."";
 echo "<br></br>";
 
 
 echo "The total value is : ".$totalValue2."";
 ?>
    <p style ="font-size:30px"> Thank you for visiting my website :)</p>
    </body>
</html>