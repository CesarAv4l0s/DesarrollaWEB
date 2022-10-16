<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .column{
            color: aquamarine;
            background-color: #031047 ;
            
            padding: 10px;
           
            font-family: Gabriola;
            
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
    <div class="header">
         <div class="row">
            <div class="column">
                <center>
                <h1>Registro de Personal</h1></center>
            </div>
         </div>
    </div>
    <div class="contenido">
        <!--Nombre-->
        <div class="Tabla">
            <div class="tabla">
                <table>
                    <thead><tr><th>Nombre</th> <th> Imagen </th></tr></thead>
                    <th><input type="text" placeholder="Ingresa Tu Nombre"></th>
                    <th><input type="file"></TH>
                    
                </table>
            </div>
  
        </div>
        <div class="Tabla">
            <div class="tabla">
                <table>
                <thead><tr><th>Edad</th> <th> Imagen </th></tr></thead>
                    <th><input type="number" placeholder="Ingresa Tu Edad"></th>
                    <th><input type="file"></th>
                    
                </table>
            </div>
           <br>

        </div>
        <div class="Tabla">
            <div class="tabla">
                <table>
                <thead><tr><th>Genero</th> <th> Imagen </th></tr></thead>
                    <th><input type="radio">Femenino</input></th>
                    <th><input type="radio">Masculino</input></th>
                    <th><input type="file"></th>
                    
                </table>
            </div>
           

        </div>
        <BR>
        <div class="Tabla">
            <div class="tabla">
                <table>
                <thead><tr><th>Grupo</th> <th> Imagen </th></tr></thead>
                    <th><select name="" id="">
                    <option value="">5PV</option>
                     <option value="a">5PM</option></select></th>


                    

             

                  <th>  <input type="file"> </th>
                    
                </table>
            </div>
           

        </div>
     

    </div>
    
</body>
</html>