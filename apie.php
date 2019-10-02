<!DOCTYPE html>
<html>
<head>
  <title>About</title>
<meta charset="utf-8">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>
<body>


<nav>
<div class="nav-wrapper deep-purple darken-2">
<a href="#" class="brand-logo">Logo</a>

<ul id="navbar-items" class="right hide-on-med-and-down">
<li><a href="#">Home</a></li>
<li><a href="#">News</a></li>
<li><a href="#">About</a></li>
</ul>


</div>

</nav>

  <nav class="bread">
    <div class="nav-wrapper">
      <div class="col s12 transparent ">
        <a href="index.php" class="breadcrumb">Home</a>
        <a href="apie.php" class="breadcrumb">About</a>
        
      </div>
    </div>
  </nav>
   

  
  <div class="container">
<h1 class="glow gray-text text-darken-4 center-align col l1 s12">APIE MUS</h1>
 
<!-- Tab links -->
<div class="tab container right transparent">
  <button  class="tablinks " onclick="openCity(event, 'Lora')">Lora</button>
  <button  class="tablinks " onclick="openCity(event, 'Raimis')">Raimis</button>
  <button  class="tablinks " onclick="openCity(event, 'Aliona')">Aliona-Jelena</button>
   <button class="tablinks" onclick="openCity(event, 'Auris')">Auris</button>
    <button class="tablinks" onclick="openCity(event, 'Community')">Community</button>
</div>

<!-- Tab content -->
<div id="Lora" class="tabcontent center-align transparent">
  <h3>Meet Lora</h3>
  <img class="materialboxed responsive-img container center-align" src="https://picsum.photos/300">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
</div>

<div id="Raimis" class="tabcontent center-align transparent">
  <h3 >Meet Raimis</h3>
  <img class="materialboxed responsive-img container center-align" src="https://picsum.photos/300">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
</div>

<div id="Aliona" class="tabcontent center-align transparent">
  <h3 >Meet Aliona</h3>
  <img class="materialboxed responsive-img container center-align" src="https://picsum.photos/300">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
</div>

<div id="Auris" class="tabcontent center-align transparent">
  <h3 >Meet Auris</h3>
  <img class="materialboxed responsive-img container center-align" src="https://picsum.photos/300">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
 </div>
 <div id="Community" class="tabcontent center-align transparent">
  <h3 >Bendruomenė</h3>
  <img class="materialboxed responsive-img container center-align" src="https://picsum.photos/300">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
</div>
</div>

</div>
<br>
<br>
<br>
<div class="contact" class="container">
            <div class="row">
              <div  class="col l6 s12">
                <h5 class="gray-text Right">Contact us</h5>
                <div class="left col l4 l2 s12">
                <h5 class="white-text"></h5>
                <ul>
                  <li><a class="grey-text text-darken-3" href="#!">Address: Verkiu g. 1 (verkiu gatveje vienas)</a></li>
                  <li><a class="grey-text text-darken-3" href="#!">City: Vilnius</a></li>
                  <li><a class="grey-text text-darken-3" href="#!">Mobile:+370 555 55555</a></li>
                  <li>Email: <a class="grey-text text-darken-3" href="email@email.lt">email@email.lt</a></li>
                </ul>
        </div>
        <img class="map left" src="images/map.png">
        </div>
  
  
  <button class="open-button" onclick="openForm()">Chat</button>
<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Ask Us</h1>

    <label for="msg"><b>Hello World</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="scripts/script.js" ></script>
</body>
</html>

