<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Kedai Kanes Pawon Perwira</title>
	<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="styles/base.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<script type="text/javascript" src="scripts/jquery.pikachoose.js"></script>
	<script type="text/javascript">
				$(document).ready(function() {
				$("#pikame").PikaChoose();	});
	</script>
	</head>
	<body >
    <div id="container">
      <header>
        <nav>
          <ul id="nav">
            <li><a href="index.php?page=home" class="current">Home</a></li>
            <li><a href="index.php?page=about">About</a></li>
            <li><a href="index.php?page=menu">Menu</a></li>
            <li><a href="index.php?page=gallery">Gallery</a></li>
           <!-- <li><a href="index.php?page=review">Testimoni</a></li> -->
            <li><a href="index.php?page=contact">Contact</a></li>
          </ul>
        </nav>
       
        <!-- Page Content -->
    
      <?php
            $page = isset($_GET['page']) ? $_GET['page'] : null;
            switch($page)
            {
            case "home" : require_once("home.php");break;
            case "about" : require_once("about.php");break;
            case "menu" : require_once("menu.php");break;
            case "gallery" : require_once("gallery.php");break;
            // case "review" : require_once("reviews.php");break;
            case "contact" : require_once("contact.php");break;
          
            default : require_once("home.php");break;
            
            }
      ?>

      <footer>
        <div class="border"></div>
        <div class="footer-widget">
          <h4>Kedai Kanes Pawon Perwira</h4>
          <p>merupakan perusahaan (home industry) yang bergerak dalam bidang pengolahan makanan dan minuman modern yang berada di daerah pekalonan dan dibentuk pada tanggal 07 July 2014. </p>
        </div>
        <div class="footer-widget">
      <br>
      <br>
      <br>
      <br>
      <br>
          <img src="images/home/5.jpg" width="280" alt="" />
        </div>
         <div class="footer-widget">
          
           <br>
      <br>
      <br>
      <br>
      <br>
          <img src="images/home/7.jpg" width="280" alt="" />
        </div>
        
        <div class="border2"></div>
        <br />
        <span class="copyright"><span class="left"><br />
        &copy; Copyright 2012 - All Rights Reserved - <a href="#">Domain Name</a></span><span class="right"><br />
        Design by <a href="http://www.priteshgupta.com">PriteshGupta.com</a><br />
        <br>
        <br />
        </span></span></footer>
    </div>
</body>
</html>