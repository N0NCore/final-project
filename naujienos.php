<!DOCTYPE html>
<html>
<head>
	<title>News</title>
<?php include "header-script.php"; ?>

</head>
<body id="larisa">

<?php include "header.php"; ?>

<nav>
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="#!" class="breadcrumb">Home</a>
        <a href="#!" class="breadcrumb">News</a>
      </div>
    </div>
  </nav>

<h1 class="white-text text-darken-4 newsnews">News</h1>

<link rel="stylesheet" href="style.css" type="text/css">

<div id="animals" class="container newalerts">

      <div id="pattern" class="naujienulinija row hoverable">
      <div class="col s12 m6 l3">
        <img class="pirmanuotrauka" src="images/tigerloose.jpg">
      </div>
        <div class="col s12 m6 l6"> 
        <ul class="naujienublokas">
          <li><h5 id="newstitle" class="naujienos">Breaking: Tiger on the loose!</h5></li>
          <li><p id="naujienosdata" class="pirmastekstas">2019-10-01</p></li>
          <li><p class="pirmastekstas">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></li>
          <li><p class="pirmastekstas"><a href="https://google.com/search">link text</a></p></li>
        </ul>
        </div>
        <div class="col s12 m6 l3">
        <a class="waves-effect waves-light btn-small buttonnews"><i class="material-icons right">keyboard_arrow_right</i>Read more</a>  
        </div>
      </div>

      <div id="pattern" class="naujienulinija row hoverable">
      <div class="col s12 m6 l3">
        <img class="pirmanuotrauka" src="images/bowlittle.png">
      </div>
        <div class="col s12 m6 l6"> 
        <ul class="naujienublokas">
          <li><h5 id="newstitle" class="naujienos">Zoo animals for adoption</h5></li>
          <li><p id="naujienosdata" class="pirmastekstas">2019-09-16</p></li>
          <li><p class="pirmastekstas">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></li>
          <li><p class="pirmastekstas"><a href="https://google.com/search">link text</a></p></li>
        </ul>
        </div> 
        <div class="col s12 m6 l3">
        <a class="waves-effect waves-light btn-small buttonnews"><i class="material-icons right">keyboard_arrow_right</i>Read more</a> 
        </div> 
      </div>

      <div id="pattern" class="naujienulinija row hoverable">
      <div class="col s12 m6 l3">
        <img class="pirmanuotrauka" src="images/slothfam.jpg">
      </div>
        <div class="col s12 m6 l6"> 
        <ul class="naujienublokas">
          <li><h5 id="newstitle" class="naujienos">Welcome two sloths to the family</h5></li>
          <li><p id="naujienosdata" class="pirmastekstas">2019-08-28</p></li>
          <li><p class="pirmastekstas">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></li>
          <li><p class="pirmastekstas"><a href="https://google.com/search">link text</a></p></li>
        </ul>
        </div>
        <div class="col s12 m6 l3">
        <a class="waves-effect waves-light btn-small buttonnews"><i class="material-icons right">keyboard_arrow_right</i>Read more</a> 
        </div>  
      </div>

  </div>

  <?php include "footer.php"; ?>
<?php include "footer-script.php"; ?>
</body>
</html>