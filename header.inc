<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Arlington Career Center Parent Advisory Group</title>
<link rel="icon" href="static/media/acclogo.png">
<link rel="stylesheet" href="static/css/body.css">
<link rel="stylesheet" href="static/css/slide.css">
<link rel="stylesheet" href="static/css/header.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
</script>
<script>
$(document).ready(function() {
  $('div#navb').click(function() {
    $('nav#mainNav').addClass('mobileNav');
    $('header div#navb').addClass('hide');
    $('header div#close').removeClass('hide');
  });
  $('header div#close').click(function() {
    $('nav#mainNav').removeClass('mobileNav');
    $('header div#navb').removeClass('hide');
    $('header div#close').addClass('hide');
  });
});
</script>
<script type="text/javascript">
// Written by Kevin Cole [kjcole@ubuntu.com] 2014.10.24
//
// Dynamically resize the slideshow parent div to the size of the
// auto-resizing images within it. Sadly, it appears I cannot
// force the slideshow parent div to resize any other way. Bugger.

window.onload = window.onresize = function () {
  var slides = document.getElementById("slides");
  var slide  = slides.children[0];
  slides.style.height = slide.offsetHeight + "px";
}
</script>
</head>
<body>
<header>
<!--this is for the mobile functionality the navburger is the three horisontal lines in the top right of the mobile version-->
<div id="navb"><img src="static/media/navburger.svg" alt="navigation icon">
</div>
<div id="close" class="hide"><img src="static/media/exit.svg" alt="navigation exit button"></div>

<!--this list is for the nav bar-->
<nav id="mainNav">

    <div class="button">About
        <div class="dropdown">
            <a href="about.php">History</a>
            <a href="">Plans</a>
        </div>
    </div>

    <a  href="FAQ.php"><div class="button">FAQs</div></a>

    <div class="button">Programs
        <div class="dropdown">
            <a href="">Engineering</a>
            <a href="">Computer Science</a>
            <a href="">Psudo-Engineering</a>
            <a href="">Forbidden Engineering</a>
        </div>
    </div>

    <a href="index.php">
        <div class="logo">
            <img src="static/media/techlogo.png" alt="Logo"/>
        </div>
     </a>

    <div class="button">News
        <div class="dropdown">
            <a href="">ok</a>
            <a href="">ok</a>
            <a href="">ok</a>
            <a href="">ok</a>
        </div>
    </div>

    <div class="button">Links
        <div class="dropdown">
            <a href="">group 1</a>
            <a href="">group b</a>
            <a href="">group III</a>
            <a href="">secret group</a>
            </div>
        </div>

    <a href=""><div class="button">Contact
	</div></a>

</nav>
</header>
