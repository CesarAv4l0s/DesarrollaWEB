<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
    margin-left: 80px;
    margin-top: 80px;
    transition: margin-left 300ms cubic-bezier(0.785, 0.135, 0.15, 0.86);
    background: url(img/fondo.jpg);
    background-size: 100vw 100vh;
    background-repeat: no-repeat;
      background-attachment: fixed;
    
}
h3{
			font-family: Papyrus;
			font-size: 26px;
			color:#B9F2FE;
		}
        h4{
            font-family:Papyrus;
            font-size: 18px;
            color: #030B29;
        }
        p{
            font-family: Gabriola;
        }
        .table{
			color: #08102A;
			font-size: 22px;
			 padding: 15px;
			 width: 500px;
			 font-family: Gabriola;
			 font-size: 32px;
			}
			.wrap{
				position: absolute;
				top: 200px;
				left: 200px;
			}
    </style>
</head>
<body>
    
<center>

<marquee direction="down" width="650" height="150" behavior="alternate" style="border-style: none;">

<font color="#BBF8D4" style="font-size: 35pt;" size="7" face="Algerian, Arial, Ms Sans"><marquee behavior="alternate">
♩ Recepción De Datos  ෴

</marquee></font></marquee></center>
<br>
<div class="image"><img src="img/prog.gif" width="400" height="300" style="border: 3px solid #F5FCA0;
			border-radius: 10px; position: absolute; top: 350px; left: 900px;"></div>

  <br>
<br>
<br>
<div class="wrap">

<h3>➵ Datos Metodo POST  ♪  Práctica Recepción 🎯</h3>

<div class="table">

<fieldset style="border-left:10px solid #00BFFF; border-top-left-radius:8px; border-bottom-left-radius:8px ; background: #E0FFFF;">
	<legend style="color: #9F5614; font-family: Snap ITC;"> <i class="fab fa-youtube" title="Inicio"></i> Datos </legend>



	<div id="fecha"><div>


<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$tel = $_POST['tel'];

echo "<p>Tu Nombre Es: ".$nombre;
echo "<br>";
echo "<p>Tienes la edad de: ".$edad." Años</p>";
echo "<P>Tu Teléfono Es: ".$tel;




?>
</fieldset>
<br>

</body>
</html>