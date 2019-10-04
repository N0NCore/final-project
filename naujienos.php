<!DOCTYPE html>
<html>
<head>
	<title>News</title>
<?php include "header-script.php"; ?>

</head>
<body id="larisa">

<?php include "header.php"; ?>

<nav class="red lighten-3">
    <div class="nav-wrapper deep-pink container">
      <div class="col s12">
        <a href="index.php" class="breadcrumb">Home</a>
        <a href="naujienos.php" class="breadcrumb">News</a>
      </div>
    </div>
  </nav>

<h1 class="white-text text-darken-4 newsnews">News</h1>

<link rel="stylesheet" href="style.css" type="text/css">

<div class="container newalerts">

      <div id="pattern" class="naujienulinija row hoverable">
      <div class="col s12 m6 l4">
        <img class="pirmanuotrauka centr-align" src="images/tigerloose.jpg">
      </div>
        <div class="col s12 m6 l5"> 
        <ul>
          <li><h5 id="newstitle" class="naujienos">Breaking: Tiger on the loose!</h5></li>
          <li><p id="naujienosdata" class="pirmastekstas">2019-10-01</p></li>
          <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></li>
          <li><p class="pirmastekstas"><a href="https://google.com/search">Find out more about tigers</a></p></li>
        </ul>
        </div>
        <div class="col s12 m6 l3">
        <a class="waves-effect waves-light btn-small" href="naujienosdetaliau.php"><i class="material-icons right">keyboard_arrow_right</i>Read more</a>
        </div>
      </div>

      <div id="pattern" class="naujienulinija row hoverable">
      <div class="col s12 m6 l4">
        <img class="pirmanuotrauka centr-align" src="images/bowlittlelil.png">
      </div>
        <div class="col s12 m6 l5"> 
        <ul>
          <li><h5 id="newstitle" class="naujienos">Zoo animals for adoption</h5></li>
          <li><p id="naujienosdata" class="pirmastekstas">2019-10-01</p></li>
          <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></li>
          <li><p class="pirmastekstas"><a href="https://google.com/search">Find out more about tigers</a></p></li>
        </ul>
        </div>
        <div class="col s12 m6 l3">
        <a class="waves-effect waves-light btn-small" href="naujienosdetaliau.php"><i class="material-icons right">keyboard_arrow_right</i>Read more</a>
        </div>
      </div>

      <div id="pattern" class="naujienulinija row hoverable">
      <div class="col s12 m6 l4">
        <img class="pirmanuotrauka" src="images/slothfam.jpg">
      </div>
        <div class="col s12 m6 l5"> 
        <ul>
          <li><h5 id="newstitle" class="naujienos">Welcome two sloths to the family</h5></li>
          <li><p id="naujienosdata" class="pirmastekstas">2019-08-28</p></li>
          <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></li>
          <li><p class="pirmastekstas"><a href="https://google.com/search">Find out more about sloths</a></p></li>
        </ul>
        </div>
        <div class="col s12 m6 l3">
        <a class="waves-effect waves-light btn-small" href="naujienosdetaliau.php"><i class="material-icons right">keyboard_arrow_right</i>Read more</a> 
        </div>  
      </div>

  </div>

  <?php include "footer2.php"; ?>
<?php include "footer-script.php"; ?>
</body>
</html>