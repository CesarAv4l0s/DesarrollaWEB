<!DOCTYPE html>
<html lang="en">
<head>
<!--
Descripción: Tarjeta De Presentación González Avalos Segunda PARTE
Autor González César
-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PresentaciónPHP</title>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
    <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


body{
    background: url(img/fondo.jpg);
    background-size: 100vw 100vh;
    background-repeat: no-repeat;
}

.card {
  width: 400px;
  overflow: hidden;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: white;
  border-radius: 15px;
  box-shadow: 7px 13px 37px rgba(0, 0, 0, .6);
}

header {
  width: 100%;
  height: 200px;
  overflow: hidden;
  position: relative;
}

header::before {
  content: '';
  position: absolute;
  border-top: 30px solid transparent;
  border-left: 400px solid white;
  bottom: 0;
}

header img {
  width: 100%;
  height: 199px;
}

section {
  padding: 10px;
  overflow: hidden;
  text-align: center;
}

section h2 {
  margin: .5em 0;
}

section p {
  margin: 1em 0;
}

ul li {
  list-style: none;
  display: inline-block;
  margin: .5em .2em;
}

ul li a {
  text-decoration: none;
  color: white;
  background: #314652;
  width: 30px;
  height: 30px;
  line-height: 30px !important;
  border-radius: 50%;
  transition: all .3s ease-in-out;
}

ul li a:hover {
  transform: scale(1.2);
}

footer {
  width: 100%;
  height: 80px;
  background: #314652;
  color: white;
  position: relative;
}

footer::before {
  content: '';
  position: absolute;
  border-bottom: 30px solid transparent;
  border-right: 400px solid white;
  top: 0;
}

footer p {
  padding: 30px;
}


  </style>
</head>
<body>
<main class="card">
    <header>
      <img src="img/Fot.png" alt="">
    </header>

    <section>
        <?php
     echo  "<h2 style='font-family: Dancing Script; color: #8B0C04; '>César Avalos</h2>";
      print("<h3 style='font-family: Gabriola; color:#041751;font-size: 18pt; '>Programación</h3>");
      printf("<p style='font-family: Papyrus; ' > Desarrolla Aplicaciones Web Con Conexión A Bases de Datos</p>");
      printf("<p style='font-family: Papyrus; ' > Introducción Al Manejo De PHP Con Servidor</p>");
      ?>
      <ul>
        <li><a href="#" class="fa fa-facebook"></a></li>
        <li><a href="#" class="fa fa-twitter"></a></li>
        <li><a href="#" class="fa fa-linkedin"></a></li>
        <li><a href="#" class="fa fa-youtube"></a></li>
      </ul>
    </section>

    <footer>
      <p style="font-family: Dancing Script; color: yellowgreen; font-size: 18pt ">28/09/2022</p>
    </footer>
  </main>
</body>
</html>