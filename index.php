<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
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
.style{
    text-align:center;
    font-size:40px;
       
}
.border{
    border-left:6px solid black;
    height:800px;
    position:absolute;
    left:23%;
}
.body{
    font-size:25px;
}

</style>
</head>
<body background = https://images.pexels.com/photos/235994/pexels-photo-235994.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost:8000/startbootstrap-resume-gh-pages/cv.html">CV</a>
  <a href="http://localhost:8000/tiltedpage_scroll-master/tiltedpage_scroll-master/demo/tiltedpage_scroll_demo.html">Interests</a>
  <a href="http://localhost:8000/About.html">Consultations</a>
  
</div>

    <div class ="style"><h2>Liam Curran Consultations</h2> </div>
    <br>
<span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;  View Options</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class ="border" </div>

<div class ="body">  <p> My consultancy services are designed to help clients with queries regarding various topics including Blockchain, autonomous things and immersive experiences. The prices vary with the type of advice I offer.<br> <bR> <br> Users can calculate the cost of what service they want by using the cost calculator in my Consultation section.<br> <br> <br> Users can also have a look at my interests in the interests section and my CV is also available for viewing in the CV section which contains the various qualifications I have relating to this field.
   
</body>
</html> 
