<?php
$title = 'Adrian Luk - Web Developer and Designer from Toronto';
require 'includes/index-header.php';

 ?>

<body>

<header>
    <nav class="sticky-shrinknav-header fixed-top">
      <h1 class="sticky-shrinknav-header-title">Adrian Luk</h1>
      <ul class="menu align-center sticky-shrinknav-menu">
        <li><a href="#" id="home"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#" id="projects"><i class="fa fa-code font-weight-bold"></i> Projects</a></li>

      </ul>
  </nav>

<h1 class="text-center d-lg-none fixed-top" id="top-banner">Adrian Luk</h1>
  <nav class="mobile-bottom-bar fixed-bottom d-lg-none">
  <a href="#" class="footer-link col-6" id="homebottom">
    <i class="fa fa-home"></i> <span class='footer-text'>Home</span>
  </a>
  <a href="#" class="footer-link col-6" id="projectsbottom">
    <i class="fa fa-code"></i> <span class='footer-text'>Projects</span>
  </a>
</nav>
</header>
    <div class="animated slideOutLeft" id="homescreen">
        <div class="container-fluid row" id="name">
            <div class="col-xs-12 col-lg-7 animated hinge" id="firstname">
                <span class="animated lightSpeedIn A">A</span>
                <span class="animated lightSpeedIn D">D</span>
                <span class="animated lightSpeedIn R">R</span>
                <span class="animated lightSpeedIn I">I</span>
                <span class="animated lightSpeedIn" id="A2">A</span>
                <span class="animated lightSpeedIn N">N</span>
            </div>
            <div class="col-xs-12 col-lg-5 animated hingelastname" id="lastname">
                <span class="animated lightSpeedIn L">L</span>
                <span class="animated lightSpeedIn U">U</span>
                <span class="animated lightSpeedIn K">K</span>
            </div>
        </div>
        <p class="animated fadeIn" id="skip">(Click anywhere to skip)</p>
    </div>

<main id="main-content">

</main>


    <address>Contact me at 
    <p><a href="mailto:aluk618@gmail.com"><i class="fa fa-envelope"></i> aluk618@gmail.com</a></p>
    <p><a href="tel:647-505-0223"><i class="fa fa-phone"></i> (647) 505-0223</a></p>
    <p><a href="https://github.com/AdrianLuk"><i class="fa fa-github"></i> AdrianLuk</a></p>
    <small>&copy;Adrian Luk <?php date_default_timezone_set("America/Toronto"); echo date('Y'); ?></small></address>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script src="js/main.js">
    </script>
    <!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-107045770-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
</body>

</html>
