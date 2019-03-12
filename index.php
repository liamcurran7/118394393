<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}
.vl {
  border-left: 6px solid green;
  height: 700px;
  position:absolute;
  left:2%;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
h2{
    text-align:center;
    font-size:50px;
}
h1{
    text-align:right;
}
</style>
</head>
<body background =" http://goss.rs/wp-content/uploads/2014/06/JOES-Website-Background-light-grey.jpg">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost:8000/CV.html">CV</a>
  <a href="http://localhost:8000/tiltedpage_scroll-master/demo/tiltedpage_scroll_demo.html">Interests</a>
  <a href="http://localhost:8000/Services.html">Services</a>
  
</div>

<h2>Liam Curran Consultancy Services Homepage</h2>
<p style = font-size:40px>Click on the element below to open the side navigation menu.</p>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
<div class="vl"></div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<h1><p style ="font-size:25px"> Liam Curran Consultation Services has been brought to you in order to provide information to users about the <br> services and topics for which we provide expert advice on.<br> <br> Browse through my website to learn more about me, the topics which I provide knowledge on and the rates at which these services are going for.</p> </h1>

   
</body>
</html> 

<?php
?>



