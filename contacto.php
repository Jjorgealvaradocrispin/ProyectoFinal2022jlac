<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contactenos</title>
  
  <body>
    <div class="row" align="center" style="font-family: Arial, Helvetica, sans-serif;">
    <div class="col border border-light " style="background-color: 	#1C1B17 ;">
            <p></p>
            <a href="princi.php" style="text-decoration: none; color: rgb(255, 255, 255);"><b>INICIO</b></a>
            <p></p>
        </div>
        <div class="col border border-light" style="background-color: 	#1C1B17 ;">
            <p></p>
            <a href="tiendas.php" style="text-decoration: none; color: rgb(255, 255, 255);"><b>TIENDAS</b></a>
            <p></p>
        </div>
        <div class="col border border-light " style="background-color: 	#1C1B17 ;">
            <p></p>
            <a href="#" style="text-decoration: none; color: rgb(255, 255, 255);">CONTÁCTENOS</a>
            <p></p>
        </div>

        <div class="col border border-light " style="background-color: 	#1C1B17 ;">
            <p></p>
            <a href="cmensajes.html" style="text-decoration: none; color: rgb(255, 255, 255);">VER MENSAJE</a>
            <p></p>
        </div>
      </div>
      <br>
      
         


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #000000;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 1px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>


<h3>CONTACTENOS</h3>

<div id="wrapper" class="container">              
                 
<br><br>
                    <h1>Contactenos</h1><hr>
                    <form class="w3-container" action="guardar.php" method="post">
        <p>
            <label>Nombres</label>
            <input class="w3-input" type="text" name="a">
        </p>
        <p>
            <label>Teléfono/Celular</label>
            <input class="w3-input" type="text" name="b">
        </p>
        <p>
            <label>Correo Electrónico</label>
            <input class="w3-input" type="text" name="c">
        </p> 
        
        <label for="subject">Mensaje</label>
    <textarea id="subject" name="d" placeholder="Escribe" style="height:200px"></textarea>
        <center>
        
        <input type="submit" value="Enviar Mensaje" name="e">
    </form>
             <center>   
              </div>

</body>
</html>

