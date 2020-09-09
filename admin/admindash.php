<?php

session_start();
	
	if( $_SESSION['uid'])
	{
		
	}
	else{
		header('location:../login.php');
	}
	
	
?>
<?php
include('header.php');
?>
<style>
.input{
	line-height:160%;
	margin:2%;
	
}
body{
	 background-image: url("ll.jpg");

	 background-repeat:no-repeat;
	 background-size:cover;
}
.input:hover{
color:tomato;
	}
	
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  text-align: center;
  padding: 2px 2px;
  color:white;
  text-decoration: none;
  font-size: 17px;
}



* {
  box-sizing: border-box;
}
.container{
	height:20%;
}
img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
  margin-left:18%;
  margin-top:2%;
 
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 6.66%;
}
.active,
.demo:hover {
  opacity: 1;
}
</style>
</style>

<div class="admintitle" align="center">
<h4><a href="logout.php"  style="float:right;margin-right:30px;color:black;font-size:20px;">Logout</a></h4>
<h1>Welcome to Admin Dashboard</h1>


</div>
<div class="dashboard">

<table  style="background-color:black;
font-family:arial black;"align="center" >
<div class="topnav" style
="font-family:cooper black;">
<a href="addstudent.php" class="input"style="align:center;
 font-size:130%;">Add Student Details</a>
<a href="updatestudent.php"  class="input"style="align:center;font-size:130%; ">Update Student Details</a>
<a href="deletestudent.php" class="input"style="align:center;font-size:130%;">Delete Student Details</a>
</table>
</div>
</div><div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 4</div>
    <img src="globe.jpg" style="width:80%;height:20%;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 4</div>
    <img src="corona.jpg" style="width:80%;height:20%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 4</div>
    <img src="baby.jpg" style="width:80%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 4</div>
    <img src="baby1.jpg" style="width:80%">
  </div>

  
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>  
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script></div>
</body>
</html>