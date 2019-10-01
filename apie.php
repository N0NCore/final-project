<!DOCTYPE html>
<html>
<head>
	<title>About</title>
<meta charset="utf-8">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "rugsejis19";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        mysqli_set_charset($conn, "utf8"); 
        ?>

</head>
<body>

<?php include "header.php"; ?>

 
 <div class="parallax-container valign-wrapper virsus">
 	<div>
 		<h1 class="center-align">Cementas netrupes, dobiliukas penkis lapus tures</h1>
    <p class="center-align">Netures, atsimerk.</p>
 	</div>
      <div class="parallax"><img src="http://picsum.photos/1920/1080"></div>
    </div>


	<div class="container">
<h1 class="red lighten-4 blue-text text-darken-4">Apie</h1>
<!-- 
<?php

// $kinamasis = "Kintamojo tekstine reiksme";
// echo $kinamasis;
        // echo "Pavyko";
        // echo "<br><br>";

       // $sql = "SELECT * FROM barai";
       // $result = mysqli_query($conn, $sql);

       // echo "<table border='10'>";

        //if (mysqli_num_rows($result) > 0) {
            // output data of each row
//             while($row = mysqli_fetch_assoc($result)) {
//                // print_r($row);
//                //  echo $row["pavadinimas"]." - ". $row["rating"];
//                // echo "<br>";
//               echo "<tr>";
//               echo "<td>" .$row["ID"] ."</td>";
//               echo "<td>" .$row["pavadinimas"] ."</td>";
//               echo "<td>" .$row["address"] . "</td>";
//               echo "<td>" .$row["rating"] . "</td>";
//               echo "</tr>";
//             }

// echo "</table>";

//         } else {
//             echo "0 results";
//         }

        mysqli_close($conn);
?>

 -->

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
        </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="scripts/script.js" ></script>
</body>
</html>