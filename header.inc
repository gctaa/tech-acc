<!DOCTYPE html>
<html lang ="en">

<head>
<meta charset="utf-8">
<title>Arlington Career Center Parent Advisory Group</title>
<link rel="icon" href="static/media/techlogo.png">
<link rel="stylesheet" href="static/css/body.css">
<link rel="stylesheet" href="static/css/info.css">
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

    <span id="other">
        <div id="button">About
            <div id="dropdown">
                <a id="content">ok</a>
                <a id="content">ok</a>
                <a id="content">ok</a>
                <a id="content">ok</a>
            </div>
        </div>
    </span>

    <span id="other">
        <div id="button">FAQs
            <div id="dropdown">
                <a id="content">ok</a>
                <a id="content">ok</a>
                <a id="content">ok</a>
                <a id="content">ok</a>
            </div>
        </div>
    </span>

    <span id="other">
        <div id="button">Projects
            <div id="dropdown">
                <a id="content">ok</a>
                <a id="content">ok</a>
                <a id="content">ok</a>
                <a id="content">ok</a>
            </div>
        </div>
    </span>

    <span id="logo">
        <img src="static/media/techlogo.png" />
    </span>

    <span id="other">
        <div id="button">News
            <div id="dropdown">
                <a id="content">ok</a>
                <a id="content">ok</a>
                <a id="content">ok</a>
                <a id="content">ok</a>
            </div>
        </div>
    </span>

    <span id="other">
        <div id="button">Links
            <div id="dropdown">
                <a id="content">ok</a>
                <a id="content">ok</a>
                <a id="content">ok</a>
                <a id="content">ok</a>
            </div>
        </div>
    </span>

    <span id="other">
        <div id="button">Contact
            <div id="dropdown">
                <a id="content">ok</a>
                <a id="content">ok</a>
                <a id="content">ok</a>
                <a id="content">ok</a>
             </div>
	</div>
    </span>

</nav>
</header>
