<?php include("header.inc"); ?>
<!-- This is the php that includes the header -->

<main>
<section>
<h1 class="pageTitle">Parent Advisory Committee</h1>
Arlngton Tech - Arlington Career Center
<h1 class="smallerTitle">Home</h1>
<!-- Page title above. <hr> is the weird break black line below. Never knew about it till now -->
<hr>

<!-- Slideshow below -->
<div id="slides" style="height: 142px;">
    <img id="slide1" class="stacked" src="static/media/projectImages/Building.jpg" alt="Building" />
    <img id="slide2" class="stacked" src="static/media/projectImages/diconnecting.jpg" alt="Disconnecting" />
    <img id="slide3" class="stacked" src="static/media/projectImages/measuring.jpg" alt="Measuring" />
    <img id="slide4" class="stacked" src="static/media/projectImages/measuringvoltage.jpg" alt="Voltage" />
    <img id="slide5" class="stacked" src="static/media/projectImages/takinglux.jpg" alt="Lux"/>
</div>

<!-- This is a discription of the website underneath the slideshow -->
<p>Welcome to the Arlington Tech website, on this site you will be able to find important information regarding the Arlington Tech programs, projects, news.</p> 
</section>


<hr  class="clear">

<!-- These are the boxes that will describe the diffrent sections of the websites and links to them -->
<div class="boxes">
  <a class="setbox" href="about.php">
    <h2>About the program</h2>
    <p>Picture maybe?</p>
  </a>
  <a class="setbox" href="/project">
    <h2>History/Legacy of the program</h2>
    <p>Quick explanation of recent history or legacy</p>
  </a>
  <a class="setbox" href="/contact">
    <h2>Contact us</h2>
    <p>For more information contact us by clicking here!</p>
  </a>
</div>

<hr>

<!-- <iframe class="calander" src="https://calendar.google.com/calendar/embed?src=v3pvp6mvpmb4n5eulj1dnjncnc%40group.calendar.google.com&ctz=America/New_York"></iframe> -->

</main>

<!-- This is the footer -->
<?php include ("footer.inc"); ?>
