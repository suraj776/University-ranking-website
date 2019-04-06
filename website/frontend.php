<!DOCTYPE html>
<html>
<title>All INDIA UNIVERSITY</title>
<head>
	<link rel="icon" href="icon.png" type="image/x-icon">
	<script type="text/javascript">
	function signup()
{
    var a=document.getElementById('name').value;
     var b=document.getElementById('mob').value;
      var c=document.getElementById('email').value;
       var d=document.getElementById('p1').value;
        var e=document.getElementById('p1').value;
        if(a!="" && b!="" && c!="" && d!="" && e!="")
        {
        	  document.getElementById('home1').href.innerHTML=a;
        }

 }
	</script>
	<script type="text/javascript">
function bt1()
{
document.body.style.backgroundColor = "red";
}
function bt2()
{
document.body.style.backgroundColor ="black";
}
function bt3()
{
document.body.style.backgroundColor ="rgba(56, 255, 38, 0.85)";
}
function bt4()
{
document.body.style.backgroundColor = "#003151";
}
function bt5()
{
document.body.style.backgroundColor = "#FA6304";
}
function bt6()
{
document.body.style.backgroundColor ="white";
}
function bt7()
{
document.body.style.backgroundColor = "brown";
}
function bt8()
{
document.body.style.backgroundColor ="#F9A602";
}

function checkpss()
{
	var a=document.getElementById('p1').value;
	var b=document.getElementById('p2').value;
	if(a!=b)
	{
     alert("Please match Password and Co-Password");
     document.getElementById("myform").action ="frontend.php";
     document.getElementById('login').style.display='block';
	}
}
	</script>

<style>
@font-face {
  font-family: 'Lobster Two';
  font-style: normal;
  font-weight: 400;
  src: local('Lobster Two'), local('LobsterTwo'), url(BngMUXZGTXPUvIoyV6yN5-fN5qU.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

body
{

	background-color: #003151;
	background-repeat: no-repeat;
	background-size: 1400px 2000px;
	font-family: arial;
}
.header
{
	margin-left:6%; 
	border-radius: 5px;
	margin-top: 15px;
	border: none;
	background-color: rgba(0,0,0,0.5);
	width: 88%;
	height: 12%;
padding-bottom: 10px;
}
#home
{
	display: inline-block;
	width:auto;
	cursor: pointer;
	border:none;
	padding: 10px;
	font-size: 18px;
	margin-left: 1.5%;
	color:white;
	letter-spacing: 0.7px;
	text-decoration: none;
}
.home
{
	background: none;
	color: white;
	font-size: 18px;
	border: none;
	outline: none;
	padding: 10px;
	cursor: pointer;
}
.home:hover
{
	background-color: rgba(0,0,0,0.7);
}
body
{
	
	margin: 0;
}
#home:hover
{
	background-color: rgba(0,0,0,0.7);
}
#search
{
width:16%;
height: 35px;
margin-left: 3%;
padding-left: 8px;
display: inline-block;
}
#srchbtn
{
	width: auto;
	cursor: pointer;
	height: 35px;
	padding-bottom: 3px;
	font-size: 19px;
	padding-right: 5px;
	margin-left: -5px;
	background-color: rgba(56, 215, 38, 0.85);
	border: none;
	color: white;
	display: inline-block;
}
#srchbtn:hover
{
	background-color: rgba(56, 255, 38, 0.85);
}
label
{
	color:white;
	font-weight: bold;
	margin-left: 20px;
}
#login
{
border: none;
height: 550px;
background-color: rgba(0,0,0,0.7);
width: 32%;
margin-left: 32%;
border-radius:5px; 
}
#login_box
{
border: none;
height: 450px;
background-color: rgba(0,0,0,0.7);
width: 32%;
margin-left: 32%;
border-radius: 5px;
}
#contact
{
border: none;
height: 400px;
background-color: rgba(0,0,0,0.7);
width: 32%;
border-radius: 5px;
margin-left:32%; 
}
input[type="text"]
{
	width: 85%;
	margin-left: 20px;
	padding-left: 20px;
	height: 30px;
	border: none;
	border-radius: 1px;
}
input[type="password"]
{
	width: 85%;
	margin-left: 20px;
	padding-left: 20px;
	height: 30px;
	border: none;
	border-radius: 1px;
}
#submit
{
	width: auto;
	padding: 8px;
	margin-top: 20px;
	padding-left: 25px;
	cursor: pointer;
	padding-right: 25px;
	letter-spacing: 0.7px;
	border: none;
	color: white;
	background-color: rgba(56, 255, 38, 0.85);
}
#log
{
    display: inline-block;	
	color: white;
	font-family: arial;
	font-size: 23px;
}
span
{
	color: white;
	padding-left: 6px;
	padding-right: 6px;
	padding-top: 8px;
	padding-bottom: 8px;
	background-color: rgba(56, 215, 38, 0.85); 
}
#img
{
	margin-bottom: -20px;
}

.bt
{
background-color: red;
border:none;
width:30px;
height:30px;
display:inline-block;
cursor:pointer;
outline: none;
border-radius:5px;
}
.bu
{
background-color: black;
border: none;
width:30px;
height:30px;
display:inline-block;
cursor:pointer;
outline: none;
border-radius:5px;
}
.bv
{
background-color: rgba(56, 215, 38, 0.85);
border: none;
width:30px;
height:30px;
display:inline-block;
cursor:pointer;
outline: none;
border-radius:5px;
}
.bw
{
background-color:#003151;
border: none;width:30px;
height:30px;
display:inline-block;
cursor:pointer;
outline: none;
border-radius:5px;
}
.bx
{
background-color: #FA6304;
border: none;
width:30px;
height:30px;
display:inline-block;
cursor:pointer;
outline: none;
border-radius:5px;
}
.by
{
background-color:white;
border: none;
width:30px;
height:30px;
display:inline-block;
cursor:pointer;
outline: none;
border-radius:5px;
}
.bz
{
background-color:brown;
border: none;
width:30px;
height:30px;
display:inline-block;
cursor:pointer;
outline: none;
border-radius:5px;
}
.ba
{
background-color: #F9A602;
border:none; 
width:30px;
height:30px;
display:inline-block;
cursor:pointer;
outline: none;
border-radius:5px;
}
ol li
{
 list-style:none;
 
 }
 .ab
 {
 	

 	border-radius: 10px;
 	position: absolute;
 	top: 25px;
 	right: 80px;
 	width: 160px; 	
 
 }
#bg
 {
 	font-size: 34px;
 	color: white;
 	letter-spacing: 14px;
 	width: 50px;
 	padding-top: 55px;
 	padding-right: 80px;
 	 transform: rotate(90deg);
 	 float: right;
 }
 input[type="number"]
 {
 	width: 85%;
 	margin-left: 20px;
	padding-left: 20px;
	height: 30px;
	border: none;
	border-radius: 1px;
 }
 #forgot
 {
 	float: right;
 	text-decoration: none;
 	color: navy;
 	font-size: 18px;
 }
 textarea
 {
 	padding-top: 10px;
 	padding-left: 10px;
 	margin-left: 20px;
 }
 .footer
 {
 	background-color: rgba(0,0,0,0.5);
 	width: 100%;
 	height: 350px;
 }
 .loc
 {
display: inline-block;
margin-left: 50px;
 }
 .social
 {
 	display: inline-block;
 	width: 400px;
 }
 a:hover
 {
opacity: 0.7;
 }

.container
{
	width: 400px;
	float: right;
	padding-right: 10px;
	padding-left: 10px;
	margin-right: 20px;
	padding-top: 10px;
	margin-top: 20px;
	display: inline-block;
	background-color: rgba(0,0,0,0.7);
}
input[type="submit"]
{
	padding: 3px;
	width: 90%;
	margin-bottom: 10px;
	margin-top: 12px;
	cursor: pointer;
	font-size: 17px;
	background-color: rgba(56, 215, 38, 0.85);
	color: white;
	border: none;
}
.about
{
	width: 94%;
	height: 540px;
	border-radius: 5px;
	margin-top: 80px;
	float: center;
	margin-bottom: 100px;
	background-color: rgba(0,0,0,0.5);
}
.bisu
{
	cursor: pointer;
	overflow: hidden;
	display: inline-block;
	width: 250px;
}
.item
{
	width: 250px;
	height: 332px;
}
.item img {
  -webkit-transition: 1s ease;
  transition: 12s ease;
}

.bisu:hover .item img {
  -webkit-transform: scale(1.5);
  transform: scale(1.5);
}
.sub
{
	position: absolute;
    top: 1570px;
    left: 7.4%;
  
  overflow: hidden;
  white-space:nowrap;
  transition:width .5s linear;
}
.about:hover .centered1,.about:hover .centered2,.about:hover .centered{
 width: 250px;
    height: 150px;
}
.sub1
{
	position: absolute;
    left: 41.2%;
    bottom: 531px;
  overflow: hidden;
  white-space:nowrap;
  transition:width .5s linear;
}
.sub2
{
	position: absolute;
bottom: 531px;
    left: 74.3%;
  overflow: hidden;
  white-space:nowrap;
  transition:width .5s linear;
}
.sos
{

 height: 45px;
 width: 150px;
	background-color: rgba(3, 185, 248, 0.48);
}
.sos1
{
 height: 45px;
 width: 150px;
	background-color: rgba(3, 185, 248, 0.48);
}
.sos2
{
 height: 45px;
 width: 150px;
	background-color: rgba(3, 185, 248, 0.48);
}
.about:hover .sub,.about:hover .sub1,.about:hover .sub2 {
   width: 150px;
}
.mail
{
	position: absolute;
	top: 1700px;
	background-color: rgba(0, 0, 0, 0.6);
	left: 100px;
	padding-right: 2px;
}
.mail1
{
	position: absolute;
	top: 1700px;
	background-color: rgba(0, 0, 0, 0.6);
	left: 554px;
}
.mail2
{
	position: absolute;
	top: 1700px;
	left: 999px;
	padding-right: 32px;
	background-color: rgba(0, 0, 0, 0.6);
}


* {box-sizing: border-box;}
.mySlides {display: none;}

/* Slideshow container */
.slideshow-container {
 width: 1150px;
  
float: center;
  margin: auto;
  padding: 30px;
 background-color: rgba(0,0,0,0.5);
  padding-right: 0px;
 border-radius:5px; 

}

/* Caption text */
.text {
  color: black;
  font-size: 22px;
  border-bottom: 2px solid black;
  font-weight: bold;
  position: absolute;
   top : 35px;
 left:390px;
}

/* Number text (1/3 etc) */
.numbertext {
  color: white;
  font-weight: bold;
  font-size: 18px;
  background-color: rgba(3, 185, 248, 0.48);
  padding: 8px 12px;
  position: absolute;
  top: 31;
  left: 32;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@media only screen and (max-width: 1320px) {
	#home,.home
	{
       display: none;
	}
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
a
{
	text-decoration: none;
	color: white;
}

#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
 
}
.service
{
	margin: 30px;
	background-color: rgba(0,0,0,0.5);
	border-radius: 10px;
	padding: 20px;
	padding-bottom: 50px;
	margin-bottom: 5px;
}
.c
{
	display: inline-block;
	float: left;
	width: 300px;
	height: 400px;
	background-color: rgba(0,0,0,0.5);
	border-radius: 5px;
	padding: 5px;
	padding-left: 10px;
	padding-right: 10px;
}
.d
{
	display: inline-block;
	float: center;
	width: 300px;
	height: 400px;
	background-color: rgba(0,0,0,0.5);
	border-radius: 5px;
	padding: 5px;
	padding-left: 10px;
	padding-right: 10px;
}
.e
{
	display: inline-block;
	float: right;
	width: 300px;
	padding-left: 10px;
	padding-right: 10px;
	height: 400px;
	background-color: rgba(0,0,0,0.5);
	border-radius: 5px;
	padding: 5px;
}
.mode1
{
	position: static;
	background: rgba(0,0,0,0.6);
	padding: 10px;
	filter:none;
	padding-bottom: 30px;
	width: 300px;
	border-radius: 5px;
}
.mode1,#login,#login_box,#contact {
    -webkit-animation: animatezoom 1.5s;
    animation: animatezoom 1.5s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
.contents,.header
{
-webkit-filtter:blur(3px);
-moz-filter:blur(3px);
-o-filter:blur(3px);
filter:blur(3px);
}
.mySlides
{
background-color: (0,0,0,0.5);
}
 </style>
</head>
<body onload="myFunction()">

<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">
	


   <div class="header" id="hd">
   	&nbsp&nbsp<img id="img" src="icon.png" width="50px" height="55px"><p id="log">&nbsp<span>ALL</span> INDIA UNIVERSITY</p>
 &nbsp &nbsp &nbsp <a href="frontend.php" id="home">Home</a>
 <a href="about_us.php" id="home">About us</a>
 <a href="#" id="home" onclick="document.getElementById('contact').style.display='block';document.getElementById('login').style.display='none';document.getElementById('login_box').style.display='none';document.getElementById('con').style.display='none';document.getElementById('contentsid').style.filter='blur(3px)';document.getElementById('hd').style.filter='blur(3px)';">Contact</a>
 <a href="#" id="home"  onclick="document.getElementById('login_box').style.display='block';document.getElementById('login').style.display='none';document.getElementById('contact').style.display='none';document.getElementById('con').style.display='none';document.getElementById('contentsid').style.filter='blur(3px)';document.getElementById('hd').style.filter='blur(3px)';">Login</a>
 <button class="home" onclick="document.getElementById('login').style.display='block';document.getElementById('login_box').style.display='none';document.getElementById('contact').style.display='none';document.getElementById('con').style.display='none';document.getElementById('contentsid').style.filter='blur(3px)';document.getElementById('hd').style.filter='blur(3px)';">Signup</button>
 <input type="search" id="search" placeholder="search.......">
 <button id="srchbtn">Search</button>
 </div><br><br>

<div id="login" style="display:none">
	<form method="POST" id="myform" action="signup.php">
  <img src="close.png" width="40px" style="float:right;cursor:pointer" onclick="document.getElementById('login').style.display='none';document.getElementById('contentsid').style.filter='blur(0px)';document.getElementById('hd').style.filter='blur(0px)';document.getElementById('con').style.display='block';"><br>
 <center><label style="font-size:20px;margin-left:45px;border-bottom:3px solid rgba(56, 215, 38, 0.85);padding-left:15px;padding-right:15px;padding-bottom:4px">Signup</label></center><br><br>
 <label>Name<input type="text" id="name" placeholder="Enter Your Name" required></label><br><br>
 <label>Gender<br>&nbsp &nbsp <input type="radio" name="gender" value="Male" checked>Male</label>
 <label><input type="radio" name="gender" value="Female">Female</label>
 <label><input type="radio" name="gender" value="Other">Other</label><br><br>
 <label>Mobile No.<input type="number" id="mob" placeholder="Enter Your Mobile Number" pattern="[789][0-9]{9}" title="wrong mobile number" required></label><br><br>
 <label>Email Id<input type="text" id="email" placeholder="Enter Your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="wrong email id" required></label><br><br>
 <label>Password<input type="password" id="p1" placeholder="Enter Password" required></label><br><br>
 <label>Co-Password<input type="password" id="p2" placeholder="Enter Co-Password" required></label><br><br>
 <center><button id="submit" onclick="signup()">Signup</button></center>
 </form>
	</div>
  <div id="login_box" style="display:none">
 <form action="login.php" method="POST">
	<img src="close.png" width="40px" style="float:right;cursor:pointer" onclick="document.getElementById('login_box').style.display='none';document.getElementById('contentsid').style.filter='blur(0px)';document.getElementById('hd').style.filter='blur(0px)';document.getElementById('con').style.display='block';"><br>
	<center><label style="font-size:20px;margin-left:45px;border-bottom:3px solid rgba(56, 215, 38, 0.85);padding-left:15px;padding-right:15px;padding-bottom:4px">Login</label></center><br><br><br>
 <label>Email Id<input type="text" placeholder="Enter Your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="wrong email id" required></label><br><br>
 <label>Password<input type="password" placeholder="Enter Password" required></label><br><br>
 <label><input type="checkbox" checked> Save Password</label>
 <center><button id="submit">Login</button></center>
 <a id="forgot" href="#">Forgot Password?</a><br><br>
 <center><label>OR</label><br>
 <label>Login via</label><br><br>
 &nbsp &nbsp &nbsp <a href="facebook.com"><img src="fb.png" width="35px"></a>&nbsp &nbsp 
 <a href="google.com"><img src="google.png" width="35px"></a></center>
 </form>
 </div>
<div id="contact" style="display:none">
 <form>
	<img src="close.png" width="40px" style="float:right;cursor:pointer" onclick="document.getElementById('contact').style.display='none';document.getElementById('contentsid').style.filter='blur(0px)';document.getElementById('hd').style.filter='blur(0px)';document.getElementById('con').style.display='block';"><br>
	<center><label style="font-size:20px;margin-left:45px;border-bottom:3px solid rgba(56, 215, 38, 0.85);padding-left:15px;padding-right:15px;padding-bottom:4px">Feel Free To Contact Us</label></center><br><br><br>
 <label>Email Id<input type="text" placeholder="Enter Your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="wrong email id" required></label><br><br>
 <label>Message<textarea rows="8" cols="53" type="text" placeholder="Write your message here......" required></textarea></label><br><br>
 <center><button id="submit">Send</button></center>
 </center>
 </form>
 </div>


         <center>
		<div class="mode1" id="bishu1">
		<img src="close.png" width="25px" style="float:right;cursor:pointer" onclick="document.getElementById('bishu1').style.display='none';document.getElementById('con').style.display='block';document.getElementById('contentsid').style.filter='blur(0px)';document.getElementById('hd').style.filter='blur(0px)';"><br>
		 <a href="#" id="home" onclick="document.getElementById('login_box').style.display='block';document.getElementById('login').style.display='none';document.getElementById('bishu1').style.display='none';document.getElementById('login_box').style.filter='blur(0px)';">Login</a><b style="color:white">|<b>
 <button class="home" onclick="document.getElementById('login').style.display='block';document.getElementById('bishu1').style.display='none';document.getElementById('login_box').style.display='none';">Signup</button>
	</div></center>
<div class="contents" id="contentsid">
 <div class="slideshow-container" id="con" style="display:none">
 <div class="mySlides fade">
  <div class="numbertext"><a href="http://www.iitb.ac.in/"><img src="brow.png" width="20px" align="top">Visit website</a></div>
  <img src="1a.jpg" style="width:87%;height:460px;border-radius:10px;">
  <div class="text">Indian Institute of Technology Bombay(IITB)</div>
 </div>

 <div class="mySlides fade">
  <div class="numbertext"><a href="https://www.iisc.ac.in/admissions/"><img src="brow.png" width="20px" align="top">Visit website</a></div>
  <img src="2.jpg" style="width:87%;height:460px;border-radius:10px">
  <div class="text">Indian Institute of Science(IISC) Banglore</div>
 </div>

 <div class="mySlides fade">
  <div class="numbertext"><a href="http://www.iitd.ac.in/"><img src="brow.png" width="20px" align="top">Visit website</a></div>
  <img src="3.jpg" style="width:87%;height:460px;border-radius:10px">
  <div class="text">Indian Institute of Technology Delhi(IITD)</div>
 </div>

 <div class="ab">
 <p id="bg" style="color:white;">BACKGROUND</p>
 <ol>
 &nbsp&nbsp<li><button onclick="bt1()"class="bt"></button> </li>
 &nbsp&nbsp<li><button onclick="bt2()" class="bu"></button> </li>
 &nbsp&nbsp<li><button id="b3" onclick="bt3()" class="bv"></button> </li>
 &nbsp&nbsp<li><button id="b4" onclick="bt4()" class="bw"></button> </li>
 &nbsp&nbsp<li><button id="b5" onclick="bt5()" class="bx"></button> </li>
 &nbsp&nbsp<li><button id="b6" onclick="bt6()" class="by"></button> </li>
 &nbsp&nbsp<li><button id="b7" onclick="bt7()" class="bz"></button> </li>
 &nbsp&nbsp<li><button id="b8" onclick="bt8()" class="ba"></button> </li>
 </ol></div>

 <div style="text-align:center;padding-right:90px">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
 </div></div>

 

 
<div>
</div><br><br>
<div class="service">
	<center><label style="font-size:29px;border-bottom:2px solid rgba(56, 255, 38, 0.85)">Our Services</label><br><br><br>
	<div class="c"><label style="font-size:25px;border-bottom:2px solid rgba(56, 255, 38, 0.85)">Campus Visit</label><br><br><label>Take a journey through your dream<br>University as before you get admitted<br> to one of it cross India.<br>If you would like to attend the campus visit,<br>please leave us a message above,<br>please note that separate reservations are<br>required for each individual for campus tour.</label><br><br>
 <br><a href="#" id="home" style="background-color: rgba(56, 255, 38, 0.85)" onclick="document.getElementById('contact').style.display='block';document.getElementById('contentsid').style.filter='blur(3px)';document.getElementById('hd').style.filter='blur(3px)';document.getElementById('con').style.display='none';">Click here for enquiry</a>
	</div>
	<div class="d"><label style="font-size:25px;border-bottom:2px solid rgba(56, 255, 38, 0.85)">Direct Addmission</label><br><br><label>We are also glad to announce that<br> after achieving <br>special authority<br> liscense from all <br>the universities in India,<br>we are now able to provide direct admission<br> to the students via our business partner.</label>
		<br><br><br><br><br><br><a href="#" id="home" style="background-color: rgba(56, 255, 38, 0.85)" onclick="document.getElementById('contact').style.display='block';document.getElementById('contentsid').style.filter='blur(3px)';document.getElementById('hd').style.filter='blur(3px)';document.getElementById('con').style.display='none';">Click here for enquiry</a>
	</div>
	<div class="e"><label style="font-size:25px;border-bottom:2px solid rgba(56, 255, 38, 0.85)">Scholarship</label><br><br><label>Systems vary widely from country to country, and <br>sometimes from institution to institution.<br> In India almost all top private colleges and <br>universities are having separate seats for management <br>quota. Education diary plays a vital role in<br> college and universities admission for all <br>Undergraduate and postgraduate programs.Hence,we<br> organize different scholarship test on the <br>basis of which one can acihieve benefits</label></div></center>
</div>

 <center><div class="about" >
	<center><label style="font-size:35px;border-bottom:3px solid rgba(56, 215, 38, 0.85)"><br>Our Professionals</label></center><br><br><br>
	<div class="bisu"  style="margin-left:0px">
		<div class="item">
	<img src="suraj.jpeg" width="260px" height="332px">
 </div></div>
 <div class="mail" style="padding-bottom:5px"><label style="margin:0px;padding-right:8px;font-size:19px;font-family:Lobster Two;letter-spacing:0.9px">&nbsp<img src="mail.png" width="25px" align="top":>&nbsp surajshah766@gmail.com</label></div>
 
 <div class="sub">
 	<div class="sos">
     <a href="https://www.facebook.com/profile.php?id=100007057170409" target="_blank"><img src="fb icon.png" width="25px" style="padding-bottom:13px"></a>
      <a href="https://www.linkedin.com/in/suraj-kumar-b881b8145/" target="_blank"><img src="linkedin icon.png" width="55px" ></a>
       <a href="" target="_blank"><img src="twiter icon.png" width="55px"></a>
   </div>
 <br><label style="background-color: rgba(3, 185, 248, 0.6);padding:8px">Suraj Kumar</label><br><br>
 <label style="background-color: rgba(3, 185, 248, 0.6);padding:8px">Student</label>
  </div>

 <div class="bisu" style="margin-left:200px">
		<div class="item">
	<img src="bisu.JPG" width="250px">
 </div></div>
 <div class="mail1" style="padding-bottom:5px"><label style="margin:0px;padding-right:1px;font-size:19px;font-family:Lobster Two;letter-spacing:0.9px">&nbsp<img src="mail.png" align="top" width="25px"> bishwajeetk003@gmail.com</label></div>
  	<div class="sub1">
 		<div class="sos1">
     <a href="https://www.facebook.com/profile.php?id=100008118907947" target="_blank"><img src="fb icon.png" width="25px" style="padding-bottom:13px"></a>
      <a href="https://www.linkedin.com/in/bishwajeet-kumar-2b044a14a" target="_blank"><img src="linkedin icon.png" width="55px" ></a>
       <a href="" target="_blank"><img src="twiter icon.png" width="55px"></a>
       </div>
 <br><label style="background-color: rgba(3, 185, 248, 0.6);padding:8px">Bishwajeet Kr</label><br><br>
 <label style="background-color: rgba(3, 185, 248, 0.6);padding:8px">Student</label>
   </div>

 <div class="bisu"  style="margin-left:190px">
		<div class="item">
	<img src="prince1.jpg" width="250px" height="332px">
 </div></div>
  <div class="mail2" style="padding-bottom:5px"><label style="margin:0px;padding-right:8px;font-size:19px;font-family:Lobster Two;letter-spacing:0.9px">&nbsp<img src="mail.png" align="top" width="25px">&nbsp sraja1652@gmail.com</label></div>
 	<div class="sub2">
 		<div class="sos2">
     <a href="https://www.facebook.com/profile.php?id=100006522195366" target="_blank"><img src="fb icon.png" width="25px" style="padding-bottom:13px"></a>
      <a href="" target="_blank"><img src="linkedin icon.png" width="55px" ></a>
       <a href="" target="_blank"><img src="twiter icon.png" width="55px"></a>
       </div>
 <br><label style="background-color: rgba(3, 185, 248, 0.6);padding:8px">Prince Kumar</label><br><br>
 <label style="background-color: rgba(3, 185, 248, 0.6);padding:8px">Student</label>
   </div>
 </div></center>


 <div class="footer">
	<div class="social">
    <br><label style="font-size:23px;font-family:arial;padding-left:130px;border-bottom:2px solid rgba(56, 215, 38, 0.85);padding-right:130px">Join Us</label><br><br>
    &nbsp <a href="faebook.com"><img src="fb.png" width="40px"></a>
   &nbsp <a href="https://plus.google.com/104953710950625338446" target="_blank"><img src="googlep.png" width="45px"></a>
    &nbsp <a href="https://chat.whatsapp.com/InyPnOOfRVQDDKl6m1BniZ" target="_blank"><img src="whatsapp.png" width="40px"></a>
    &nbsp <a href="https://www.linkedin.com/groups/10401107/" target="_blank"><img src="linked.png" width="40px"></a>
    &nbsp <a href="google.com"><img src="github.png" width="40px"></a>
    &nbsp <a href="https://www.instagram.com/venom.003/" target="_blank"><img src="instagram.png" width="40px"></a>
    &nbsp <a href="https://twitter.com/Bishwaj29117495" target="_blank"><img src="twiter.jpg" width="42px"></a><br><br><br><br><br><br><br><br><br><br>
 </div>
    <div class="loc">
    	<br><label style="font-size:23px;font-family:arial;padding-left:105px;border-bottom:2px solid rgba(56, 215, 38, 0.85);padding-right:130px">Location</label><br><br>
    	&nbsp <a href="https://goo.gl/maps/SKNYf7VhhP62" target="_blank"><img src="map1.png" width="350px" height="130px"></a><br><br>
    	<center><label><img src="loc.png" width="20px" align="top"> Location<b> : </b>Phagwara,Gt-road Delhi,<br>Punjab-144401,India,<br>call for more information( <img src="call1.png" width="15px" align="top">+91-8847606243)</label></center>
    </div>


  <div class="container">
  	<form>
   <center><label style="font-size:23px;font-family:arial;color:white;border-bottom:2px solid rgba(56, 215, 38, 0.85);">Subscribe to our Newsletter</label></center><br>
    <label>Name<input type="text" placeholder="Name" name="name" required></label><br><br>
    <label>Email-id<input type="text" placeholder="Email address" name="mail" required><label><br><br>
    <label>
      <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
    </label><br><br>
    <div style="height:50px;width:100%;background-color:rgba(0,0,0,0.45)">
    <center><input type="submit" id="abc" value="Subscribe" ></center>
    <script type="text/javascript">
function sub()
{
	alert("You have subscribed to our daily Newsletter");
}
    </script>
    </div>
  </form>
  </div>
	</div>
</div>
</div>
	<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}

var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</html>
