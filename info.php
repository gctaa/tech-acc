<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Olorun Info</title>

<link rel="icon" href="static/media/OlorunSM.png">
<link rel="stylesheet" href="static/css/body.css">
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
<!-- This is the php that includes the header -->
<?php include("header.inc"); ?>

<main>

<!-- These sections can be repeated as many times as nessisary to organize information(15yy here to copy) -->
<section class="info">

<!-- This is the main picture for the page -->
<img class="left" src="static/media/projectImages/acc_sign.jpg"/>

<!-- This is a discription of the website underneath the picture -->
<section class="right">

<h2>What gave you the idea for Project Olorun?</h2>
<p>when mr. Johnson arrived at APS in 2014 the school already had green intentions. So he came up with the idea of students being able to use solar energy to charge their laptops and smartphones. From there he came up with an idea for a pergola which would serve both a functional and asthetic purpose.</p>
</section>

<!-- This is the black line that is at the bottom --> 
</section>

<hr>

<!-- These sections can be repeated as many times as nessisary to organize information(19yy here to copy) -->
<section class="info">

<!-- This is the main picture for the page -->
<img class="right" src="static/media/projectImages/acc_sign.jpg"/>

<!-- This is a discription of the website underneath the picture -->
<section class="left">

<h2>Why did you choose the name Olorun?</h2>
<p>Mr. Johnson had already been familiar with west african theology and chose Olorun because he was the god of the sky and more specificaly the sun.</p>  
</section>

<!-- This is the black line that is at the bottom --> 
</section>

<hr>

<!-- These sections can be repeated as many times as nessisary to organize information(19yy here to copy) -->
<section class="info">

<!-- This is the main picture for the page -->
<img class="left" src="static/media/projectImages/acc_sign.jpg"/>

<!-- This is a discription of the website underneath the picture -->
<section class="right">

<h2>What classes are participating in this project?</h2>
<p>There is a variety of specialized classes working on the project such as engineering and electrician classes.<p>
</section>

<!-- This is the black line that is at the bottom --> 
</section>

<hr>

<!-- These sections can be repeated as many times as nessisary to organize information(19yy here to copy) -->
<section class="info">

<!-- This is the main picture for the page -->
<img class="right" src="static/media/projectImages/acc_sign.jpg"/>

<!-- This is a discription of the website underneath the picture -->
<section class="left">

<h2>What do you see as the future of this project?</h2>
<p>It brings awareness to sustainable technology.  Mr. Johnson hopes also make it global to provide electricity to African schools.</p>
</section>

<!-- This is the black line that is at the bottom --> 
</section>

<hr>

<!-- These sections can be repeated as many times as nessisary to organize information(19yy here to copy) -->
<section class="info">

<!-- This is the main picture for the page -->
<img class="left" src="static/media/projectImages/acc_sign.jpg"/>

<!-- This is a discription of the website underneath the picture -->
<section class="right">

<h2>What has been the most difficult part of this project?</h2>
<p>The abstract mathematical process of quantifying data and specing the project has been the hardest part.</p>
</section>

<!-- This is the black line that is at the bottom --> 
</section>

<hr>

<!-- These sections can be repeated as many times as nessisary to organize information(19yy here to copy) -->
<section class="info">

<!-- This is the main picture for the page -->
<img class="right" src="static/media/projectImages/acc_sign.jpg"/>

<!-- This is a discription of the website underneath the picture -->
<section class="left">
<h2>How do you see this helping your students in the future?</h2>
<p>It not only helps all the students have a good place to charge their phones. It also gives students hands on experience and a physical representation of what they can achieve if they work together.</p>
</section>

<!-- This is the black line that is at the bottom --> 
</section>
<!-- This is the footer -->

<?php include ("footer.inc"); ?>

</body></html>
