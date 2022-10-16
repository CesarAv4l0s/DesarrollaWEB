<!DOCTYPE html>
<html lang="en">
<head>
    <!--Descripción: Código Para Calcular las Tablas De Multiplicar Con Método POST
      Creado Por: César González
      12/10/2022
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <style>
 @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}
body{
    font-family: Papyrus;
    background: url(img/fondo.jpg);
			background-repeat: no-repeat;
			background-size: 100vw 100vh;
			  background-attachment: fixed;
}
.container-sub{
    width: 100%;
    height: 400px;
    background: url("img/Imagen.JPEG");
    
    background-repeat: no-repeat;
    background-size: cover;
}
.content-sub{
    width: 100%;
    height: 100%;
    background: rgba(0,22,0,0.7);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.content-sub h2{
    color: #fff;
    font-size: 30px;
    margin-bottom: 10px;
}
.content-sub p{
    color: #fff;
    font-size: 17px;
    margin-bottom: 25px;
    max-width: 500px;
    text-align: center;
}
.content-sub form{
    width: 100%;
    max-width: 440px;
    display: flex;
}
.content-sub form .campo{
    width: 100%;
    padding: 15px 15px;
    font-size: 16px;
    border: none;
    border-radius: 3px 0px 0px 3px;
    outline: 0px;
}
.content-sub form .btn-sub{
    padding: 15px 25px;
    font-family: Gabriola;
    border: none;
    font-size: 16px;
    border-radius: 0px 3px 3px 0px;
    background: #68C3A3;
    color: #fff;
    cursor: pointer;
    outline: 0px;
}
.content-sub form .btn-sub:hover{
    background: #3eba8f;
}
.Tabla{
			margin: 150px auto;
			width: 500px;


		}
        table{
			background-color: white;
			text-align: left;
			width: 100%;
			border-radius: 10px;
			border-collapse: collapse;

		}
		th, td{
			
			padding: 20px;
            font-family: Gabriola;
		}
		thead{
			background-color: #246355;
			border-bottom: solid 5px;
			color: white;
            
		}
		tr:nth-child(even){
			background-color: #ddd;
		}
		tr:hover{
			background-color: #369681;
			color: white;
		}
       
    </style>
</head>

<body>
<div class="container-sub">
        <div class="content-sub">
        <marquee direction="down" width="950" height="150" behavior="alternate" style="border-style: none;">

<font color="#deecab" style="font-size: 33pt;" size="7" face="Algerian, Arial, Ms Sans"><marquee behavior="alternate">
  ♩ Práctica Tablas De Multiplicar  ෴

 </marquee></font></marquee></center>
 <br>
 <h3 style="color: #B9F2FE; position: absolute; left: 150px; top: 300px ">➵ Tablas  ♪  Práctica Guíada 🎯</h3>
<br><br>
<form action="TablasMult.php" method="POST">
<input type="number" min="1" name="cajanumero" required class="campo">
          <input type="submit" value="Calcular" class="btn-sub">
</form></div>
    </div>
        <?php
        if(isset($_POST['cajanumero']))
		{
			$numeroingresado = $_POST['cajanumero'];
            echo "<div class='Tabla'>
            ";
			echo "<table id='tabla'><br>";
      echo "<thead><tr><th> Tabla del $numeroingresado </th><th>Resultado</th></tr></thead>";
		
			
			for($i=1; $i <= 12; $i++)
			{
				$valor = $i*$numeroingresado;
				echo "<tr>";
				echo "<td>➵&nbsp; $i X $numeroingresado  &nbsp;</td>";
				echo "<td>♩&nbsp; $valor &nbsp;</td>";
				echo "</tr>";
			}
			
			echo "</table>";
			
		}
        ?>
 
</body>
</html>