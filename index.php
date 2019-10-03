<!DOCTYPE html>
<html>
<head>
	<title>Puslapio Pavadinimas</title>

  <?php include "header-script.php"; ?>

  <title>Audio</title>

</head>
<body id="larisa">
  
  <?php include "header.php"; ?>

  

  <nav class="Home"  >
    <div class="nav-wrapper deep-pink container">
      <div class="col s12">
        <a href="#!" class="breadcrumb">Home</a>
      </div>
    </div>
  </nav>

 <div class="slider">
    <ul class="slides">
      <li>
        <img src="https://picsum.photos/1920/1080"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://picsum.photos/1920/1080"> 
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://picsum.photos/1920/1080"> 
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://picsum.photos/1920/1080"> 
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
    $('.slider').slider();
  });
  </script>

 <div class="container">
  <h1 class="white-text text-darken-4 center-align">W  E  L  C  O  M  E</h1>


  <div class="row">

    <div class="col s12 m12 l4  center-align">
      <img class="materialboxed responsive-img enviroment-type-photo " src="http://picsum.photos/500 ">
     
      <h3 class="center-align">Sveikuciai pupuliai</h3>
      <p class="center-align">Meduolis <a href="https//www.google.lt">nuoroda </a> bus skanus, tik deimantai nesikramto</p>
       <form action="https://google.com/search">
       <input type="text" name="query">
      <button>Ieškoti</button>

      </form>
    </div>
    <div class="col s12 m6 l4 center-align ">
      <img class="materialboxed responsive-img enviroment-type-photo" src="http://picsum.photos/500">
      <h3 class="center-align">Sveikuciai pupuliai</h3>
      <p class="center-align">Meduolis <a href="https//www.google.lt">nuoroda </a> bus skanus, tik deimantai nesikramto</p>
       <form action="https://google.com/search">
       <input type="text" name="query">
      <button>Ieškoti</button>

      </form>
    </div>
    <div class="col s12 m6 l4 center-align ">
      <img class="materialboxed responsive-img enviroment-type-photo" src="http://picsum.photos/500 ">
      <h3 class="center-align">Sveikuciai pupuliai</h3>
      <p class="center-align">Meduolis <a href="https//www.google.lt">nuoroda </a> bus skanus, tik deimantai nesikramto</p>

       <form action="https://google.com/search">
       <input type="text" name="query">
      <button>Ieškoti</button>

      </form>
    </div>

  </div>

</div>



<!-- <audio controls>
    <source src="images/roar.mp3" type="audio/mpeg">
  </audio> -->


<?php include "footer2.php"; ?>
<?php include "footer-script.php"; ?>

</body>
</html>