<?php 
    include("conexionARE.php");
    $con=conectar();


    $sql="SELECT *  FROM areas";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);



    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> INGRESAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        
    </head>
    
<body>
         <body style="background:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100">
                <div class="container mt-5">
                    <div style="width: 50%; margin-left: 25%;background-color:##9EECE5; ">
                <h1 style= "font-family: candy randy"><font color="#000000"><b>Ingresar datos</h1>

<!-- <div class="col-md-5" style="align-content: right;">
 -->

 <form action="insertarARE.php" method="POST">

<label for="id_area">ID AREA</label>
<input type="text" class="form-control mb-3" name="id_area">

<label for="nom_area">NOMBRE AREA</label>
<input type="text" class="form-control mb-3" name="nom_area">

<label for="est_area">est_area</label>
<input type="text" class="form-control mb-3" name="est_area">
                                    
<b><input type="submit"style="background-color:#000000;font-family: arial ; border-color:#F5F5DC;" class="btn btn-danger" value=Ingresar></b>
                                </form>

<th><label for="busqueda"></label><br><a href="areas.php" class="btn btn-info">VOLVER</a></th>
                        </div>