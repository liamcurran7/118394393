<!DOCTYPE html>
<html>
    <body>
        
        <?php
        
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        echo "The name is :" ,$fullNameValue ;
        echo "<br></br>";
        echo "The total value is :", $totalValue2.">" ;
        ?>
    </body>
</html>








