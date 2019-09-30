<!DOCTYPE html>
<html>
<head>
	<title>News</title>
<?php include "header-script.php"; ?>

</head>
<body>

<?php include "header.php"; ?>
 <!-- <nav class="blue">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a   href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav> -->

<!--    <ul class="sidenav" id="mobile-demo">
    <li><a class="white-text" href="sass.html">Sass</a></li>
    <li><a class="white-text" href="badges.html">Components</a></li>
    <li><a class="white-text" href="collapsible.html">Javascript</a></li>
      </ul> -->

 <div class="parallax-container valign-wrapper virsus">
 	<div>
 		<h1 class="center-align">Cementas netrupes, dobiliukas penkis lapus tures</h1>
    <p class="center-align">Netures, atsimerk.</p>
 	</div>
      <div class="parallax"><img src="http://picsum.photos/1920/1080"></div>
    </div>


	<div class="container">
<h1 class="red lighten-4 blue-text text-darken-4">Naujienos</h1>

<?php

// $kinamasis = "Kintamojo tekstine reiksme";
// echo $kinamasis;
        // echo "Pavyko";
        // echo "<br><br>";

        $sql = "SELECT * FROM barai";
        $result = mysqli_query($conn, $sql);

        echo "<table border='10'>";

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
               // print_r($row);
               //  echo $row["pavadinimas"]." - ". $row["rating"];
               // echo "<br>";
              echo "<tr>";
              echo "<td>" .$row["ID"] ."</td>";
              echo "<td>" .$row["pavadinimas"] ."</td>";
              echo "<td>" .$row["address"] . "</td>";
              echo "<td>" .$row["rating"] . "</td>";
              echo "</tr>";
            }

echo "</table>";

        } else {
            echo "0 results";
        }

        mysqli_close($conn);
?>



    <div class="row">

      <div class="col s12 m12 l4  center-align">
        <img class="materialboxed responsive-img" src="http://picsum.photos/500">
        <h3 class="center-align">Sveikuciai pupuliai</h3>
        <p class="center-align">Meduolis bus skanus, tik deimantai nesikramto</p>
      </div>
      <div class="col s12 m6 l4 center-align">
        <img class="materialboxed responsive-img" src="http://picsum.photos/500">
        <h3 class="center-align">Sveikuciai pupuliai</h3>
        <p class="center-align">Meduolis bus skanus, tik deimantai nesikramto</p>
      </div>
      <div class="col s12 m6 l4 center-align">
        <img class="materialboxed responsive-img" src="http://picsum.photos/500">
        <h3 class="center-align">Sveikuciai pupuliai</h3>
        <p class="center-align">Meduolis bus skanus, tik deimantai nesikramto</p>
      </div>

    </div>


<p>Check my pic Ya'll</p>
<img class="materialboxed responsive-img " src="http://picsum.photos/2000">

 </div>

  <?php include "footer.php"; ?>
<?php include "footer-script.php"; ?>
</body>
</html>