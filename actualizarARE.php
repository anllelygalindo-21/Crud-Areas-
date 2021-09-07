<?php 
    include("conexionARE.php");
    $con=conectar();

$id_area=$_GET['id_area'];

$sql="SELECT * FROM areas WHERE id_area='$id_area'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACTUALIZAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar_Areas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     </head>
    <body>
        <body style="background:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100" border-radius="20px">

                <div class="container mt-5">
                    <div style="width: 50%; margin-left: 25%;background-color:#9EECE5; ">
                <h1 style= "font-family: candy randy"><font color="#000000"><b>Actualizar</h1>
                <form action="updateARE.php" method="POST">

        <input type="hidden" name="id_area" value="<?php echo $row['id_area']  ?>">


<label for="nom_area">NOMBRE DEL AREA</label>
    <input type="text" class="form-control mb-3" name="nom_area" id="nom_area"  value="<?php echo $row['nom_area']  ?>">
<label for="est_area">EST_AREA</label>
    <input type="text" class="form-control mb-3" name="est_area" id="est_area" value="<?php echo $row['est_area']  ?>">

                               

                            <input type="submit"style="background-color:#000000;font-family: arial ; border-color:#F5F5DC;" class="btn btn-danger" value=Actualizar>
                    </form>
                    <th><label for="busqueda"></label><br><a href="areas.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
                    </div>
    </body>
</html>
                    
                        
</html>