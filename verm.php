<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="dime.css">
    <link rel="stylesheet" href="diseño1.css">
    <link rel="stylesheet" href="diseño2.css">
   
    
    <title>Productos</title>
</head>

     <div class="row" align="center" style="font-family: Arial, Helvetica, sans-serif;">
        <div class="col border border-light" style="background-color: #000000 ;">
            <p></p>
            <a href="princi.php" style="text-decoration: none; color: rgb(255, 255, 255);"><b>INICIO</b></a>
            <p></p>
        </div>
        <div class="col border border-light" style="background-color: #000000 ;">
            <p></p>
            <a href="productos.php" style="text-decoration: none; color: rgb(255, 255, 255);"><b>PRODUCTOS</b></a>
            <p></p>
        </div>        
        <div class="col border border-light" style="background-color: #000000 ;">
            <p></p>
            <a href="tiendas.php" style="text-decoration: none; color: rgb(255, 255, 255);"><b>TIENDAS</b></a>
            <p></p>
        </div>
        <div class="col border border-light" style="background-color: #000000 ;">
            <p></p>
            <a href="contacto.php" style="text-decoration: none; color: rgb(255, 255, 255);"><b>CONTACTENOS</b></a>
            <p></p>
        </div>
      </div>
      <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>

<h2>MENSAJES RECIBIDOS</h2>
<table>
  <tr>
    <th>Nombre</th>
    <th>Telefono </th>
    <th>Correo</th>
    <th>Mensajes</th>
    <th>Eliminar</th>
    
  </tr>
  


  <?php
     include('bd.php');
     $query="SELECT * FROM mensajes";
     $resultados=mysqli_query($conn, $query);
     while($row=mysqli_fetch_array($resultados)){ ?>
       <tr>
            <td><?php echo $row['nombre']?> </td>
            <td><?php echo $row['telefono']?> </td>
            <td><?php echo $row['correo']?> </td>
            <td><?php echo $row['mensaje']?> </td>
            <td>
                <a href="eliminar.php?id=<?php echo $row['nomensaje']?>">
                 <img src="images/eli.jpg" width="40px" alt="eliminar"></a>
            </td>
       </tr>  
       <?php } ?>
     </table>
     </div>
  <a href="pdf.php">
<input type="submit" value="PDF"></a>
</body>
</html>