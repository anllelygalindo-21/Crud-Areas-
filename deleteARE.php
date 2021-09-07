<?php

include("conexionARE.php");
$con=conectar();

if(isset($_GET['id_area'])) {
  $id_area = $_GET['id_area'];
  $query = "DELETE FROM areas WHERE id_area='$id_area'";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");

  }
  header("Location: areas.php"); 
}

?>