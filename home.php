<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse ">

  <div class="container-fluid ">
 
    <div class="navbar-header ">
    <div
      class="collapse navbar-collapse "
      id="navbarCenteredExample"
    >
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Students <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="student-create.php">Add a new student</a></li>
          <li><a href="index.php">Students Control Panel</a></li>
          <li><a href="allParentList.php">Parents Details</a></li>
        </ul>
      </li>
      <li><a href="admin-timetable.php">Timetables</a></li>
      <li><a href="admin-teacher.php">Teacher</a></li>
      <li><a href="payments.php">Payments</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
    
    
  </div></div>
</nav>

<style>
header {
  text-align: center;
  padding: 3px;
  background-color: black;
  color: white;
}
</style>

<body>


<header>
<h3>PRINCETON EDUCATION INSTITUTE</h3>
  <h5>Welcome to the Student Management System</h5>
  <p> As a beginning of onlining the students management in here we have consider only about the grade 11.</p>
</header>

</body>


<!--navi bar ends here and starts the slide -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1150px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
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
  animation-name: fade;
  animation-duration: 6s;
}

@keyframes fade {
  from {opacity: .5} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="3newn.jpg" style="width:100%">
  <div class="text">A teacher affects eternity; he can never tell where his influence stops.” - Henry B. Adams</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="2newn.jpg" style="width:100%">
  <div class="text justify">“Education is the most powerful weapon which you can use to change the world.”-Nelson Mandela</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="1newn.jpg" style="width:100%">
  <div class="text">“Tell me and I’ll forget; show me and I may remember; involve me and I’ll understand.”-Chinese Proverb</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
  setTimeout(showSlides, 2500); // Change image every 2 seconds
}
</script>

<!--footer starts here-->

<style>


footer {
  text-align: center;
  padding: 3px;
  background-color: black;
  color: white;
}
</style>
</head>
<body>


<footer>
  <h5>PRINCETON</h5>
  <p> EDUCATIONAL INSTITUTE</p>
</footer>

</body>
</html>

</body>
</html> 

<?php 
}else{
     header("Location: indexn.php");
     exit();
}
 ?>

