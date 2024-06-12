<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papeleria</title>
    <link rel="stylesheet" href="stl.css">
</head>
<body>
     <h1 class="titulo">PAPELERIA</h1>
<div class="slider-box">
    <ul>

        <li>
            <img  src="imag/f1.jpg" alt="">
        </li>

        <li>
            <img  src="imag/f2.jpg" alt="">
        </li>

        <li>
            <img  src="imag/f3.jpg" alt="">
        </li>

        <li>
            <img  src="imag/f4.jpg" alt="">
        </li>
    </ul>
</div>
    <form action="" method="POST">
        <h2>PRODUCTO</h2>

        <label for="">ID</label>
        <input type="text" name="id"><br>
        <label>Nombre</label>
        <input type="text" name="nombre"><br>
        <label>Precio</label>
        <input type="text" name="precio"><br>
        <label>Cantidad</label>
        <input type="text" name="cantidad"><br>
        <label>Departamento</label>
        <input type="text" name="departamento"><br>
        <label>Fecha</label>
        <input type="text" name="fecha"><br><hr>

        <input type="submit" name="insertar" value="INSERTAR" class="botton">
        <input type="submit" name="consultar" value="CONSULTAR" class="botton">
        <input type="submit" name="actualizar" value="ACTUALIZAR" class="botton">
        <input type="submit" name="eliminar" value="ELIMINAR" class="botton">
    </form>
</body>
</html>

<section >
<?php
 $conexion = new mysqli('localhost', 'root', '', 'papeleria');
  
  $id=$_POST['id'];
  $nombre=$_POST['nombre'];
  $precio=$_POST['precio'];
  $cantidad=$_POST['cantidad'];
  $departamento=$_POST['departamento'];
  $fecha=$_POST['fecha'];

  if(isset($_POST['insertar'])){
        $insertar="INSERT INTO producto (nombre, precio, cantidad, departamento, fecha) VALUES ('$nombre', '$precio', '$cantidad', '$departamento', '$fecha')";
        $sql=mysqli_query($conexion, $insertar);
  }

  if(isset($_POST['consultar'])){

    $consultar = "SELECT * FROM producto";
    $sql=mysqli_query ($conexion, $consultar);
    while($ver=mysqli_fetch_array($sql)){
        echo"<br>";
        echo $ver['id'];
        echo" ";
        echo $ver['nombre'];
        echo" ";
        echo $ver['precio'];
        echo" ";
        echo $ver['cantidad'];
        echo" ";
        echo $ver['departamento'];
        echo" ";
        echo $ver['fecha'];
        echo "<br><hr>";
    }
    
  }

  if(isset($_POST['actualizar'])){
    
    $actualizar="UPDATE producto SET nombre='$nombre', precio='$precio', cantidad='$cantidad', departamento='$departamento', fecha='$fecha'WHERE id='$id'";
    $sql=mysqli_query ($conexion, $actualizar);

  }

  if(isset($_POST['eliminar'])){
    
    $eliminar="DELETE FROM producto WHERE id='$id'";
    $sql=mysqli_query ($conexion, $eliminar);

  }

?>
</section><hr>

<footer>
    <h2>Papeleria</h2><br>
    <h1>Papeleria SHARON</h1><br><hr>
    <h2>SIGUENOS:</h2><br>
    <a href="https://www.facebook.com/facebook/">
        <img src="imag/faceb.png" alt="face">
    </a>
    <a href="https://www.instagram.com/">
        <img src="imag/insta.png" alt="insta">
    </a>
    <a href="https://x.com/@X?mx=2">
        <img src="imag/X.png" alt="x">
    </a>
</footer>