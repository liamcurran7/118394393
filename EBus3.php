<!DOCTYPE html>
<html>
    <head>
 
    </head>
    <body style ="font-size:30px"  background = http://goss.rs/wp-content/uploads/2014/06/JOES-Website-Background-light-grey.jpg>
    <!-- //Starting the session to get the session variable from last page-->
   
 <?php
 
 session_start () ;
 $totalValue2 = $_POST ['txtTotal'];
 $fullNameValue= $_POST ['txtName'];
 echo "The name is : ".$fullNameValue.".";
 echo "<br></br>";
 echo "The total value is : ".$totalValue2.">";
 ?>
    </body>
</html>
