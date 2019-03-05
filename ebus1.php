<!--Creating a session variable and assigning it to txtTotal-->
<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang ="en" xmins ="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset ="utf-8" />
        <title> EBus1</title>
        <link rel ="stylesheet" href ="style.css" type ="text/css" />
    </head>
    <body>
        <div class ="form">
            <form name ="intCalc" method ="post" action ="ebus2.php">
                <h1> Shop Calculator </h1>
                
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b><h1 style ="background-color:white"> Select A Service </b> </td></h1>
                        </tr>
                        <tr>
                            <td>Blockchain - $1000</td>
                            <td> <input type ="radio" id ="Blockchain" name ="rdoGroup" value ="1000" /></td>
                        </tr>
                        <tr>
                            <td> Autonomous Things (Robots)-$2000 </td>
                            <td> <input type ="radio" id ="Autonomous" name ="rdoGroup" value ="2000" /></td>"
                        </tr>
                        <tr>
                            <td> Immersive Experience- $3000 </td>
                            <td> <input type ="radio" id ="Immersive" name ="rdoGroup" value ="3000" /></td>
                        </tr>
                    </table>
                </center>
                <br />
                <center>
                    <table cellspacing ="10">
                        <tr>
                            <td><b></b></td>
                            <td><b> Amount</b></td>
                        </tr>
                        <tr>
                            <td> Sub Total</td>
                            <td><input type ="text" id ="txtSubTotal" name ="txtSub" readonly /></td>
                        </tr>
                        <tr>
                            <td> -Discount @10% </td>
                            <td> <input type ="text" id ="txtDisc" name ="txtDisc" readonly /></td>
                        </tr>
                        <tr>
                            <td> +VAT @20% </td>
                            <td> <input type ="text" id ="txtVat" name ="txtVat" readonly /></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type ="text" id ="txtTotal" name ="txtTotal" value ="" readonly /></td>
                        </tr>
                      
                      
           </table>
                </center>
                <br />
                <center>
                       <input type ="button" name ="btnCalc" id ="btnCalc" onclick ="calcSub()" value ="Calculate Amount"/>
                       <input type ="button" name ="btnClear" id ="btnClear" onclick ="AmountClear()" value ="clear" />
                       <input type ="submit" name ="btnProceed" id ="btnProceed" onclick ="" value ="Proceed"/>
                </center>       
                 
                    
            </form>
        </div>
        <script type ="text/javascript">
            function calcsub() {
                var subAmount = parseFloat(document.getElementById('txtSubTotal').value):
                var Blockchain = parseFloat(document.getElementById('Blockchain').value):
                var Autonomous Things = parseFloat(document.getElementById('Autonomous').value):
                var Immersive Experience = parseFloat(document.getElementById('Immersive').value):
                
                if (document.getElementById('Blockchain').checked) (
                document.intCalc.txtSubTotal.value = Blockchain;
                subAmount = Blockchain;
                        calculation(subAmount);
                        )
                else if (document.getElementById('Autonomous').checked) (
                        document.intCalc.txtSubTotal.value = Autonomous Things;
                        subAmount = Autonomous;
                                calculation(subAmount);
                                        )
                                else if (document.getElementById('Immersive').checked)(
                                        document.intCalc.txtSubTotal.value = Immersive;
                                        subAmount = Immersive;
                                                calculation(subAmount);
                                                        )
                                                
                                                function calculation(parmSTotal){
                                                    var subTotal = parseFloat(parmSTotal);
                                                    var discCalc = parseFloat(subTotal * .30)
                                                    var vatCalc = parseFloat(subTotal * .40);
                                                    var total = parseFloat(subTotal - discCalc + vatCalc);
                                                    
                                                    document.intCalc.txtDisc.value = discCalc;
                                                    document.intCalc.txtVat.value = vatCalc;
                                                    document.intCalc.txtTotal.value = total;
                                                    
                                                }
                                                
                                                function AmountClear(){
                                                    document.getElementById("txtSubTotal").value = "";
                                                    document.getElementById("txtDisc").value = "";
                                                    document.getElementById("txtVat").value = "";
                                                    document.getElementById("txtTotal").value = "";
                                                }
                        
            </script>
    </body>
</html>



