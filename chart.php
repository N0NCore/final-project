<!-- UZSKUBEJOM, paskutines minutes darbas 30min -->

<!DOCTYPE html>
<html>
<head>
	<title>News</title>
<?php include "header-script.php"; ?>

 <!-- <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "coktai_vcs191004-b";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        mysqli_set_charset($conn, "utf8"); 
        ?> -->


</head>
<body id="larisa">



<?php include "header.php"; ?>

<nav class="red lighten-3">
    <div class="nav-wrapper deep-pink container">
      <div class="col s12">
        <a href="index.php" class="breadcrumb">Home</a>
        <a href="apie.php" class="breadcrumb">About</a>
        <a href="apie.php" class="breadcrumb">Going Extinct</a>
      </div>
    </div>
  </nav>



<div class="container">

  <h1 class="center-align">Top 10 Most Endangered Animals</h1>

  <div>
<?php

// $kinamasis = "Kintamojo tekstine reiksme";
// echo $kinamasis;
        // echo "Pavyko";
        // echo "<br><br>";

        $sql = "SELECT * FROM coktai_vcs191004-b";
        $result = mysqli_query($conn, $sql);

        echo "<table> 
        <th>Most Endangered Rank</th>
        <th>Aninal</th> 
        <th>How Much Left</th>";

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
               // print_r($row);
               //  echo $row["pavadinimas"]." - ". $row["rating"];
               // echo "<br>";
              echo "<tr>";
              echo "<td>" .$row["rank"] ."</td>";
              echo "<td>" .$row["name"] ."</td>";
              echo "<td>" .$row["count"] ."</td>";
              echo "</tr>";
            }

echo "</table>";

        } else {
            echo "0 results";
        }

        mysqli_close($conn);
?>

    </div>
  </div>



<?php include "footer2.php"; ?>
<?php include "footer-script.php"; ?>
</body>
</html>