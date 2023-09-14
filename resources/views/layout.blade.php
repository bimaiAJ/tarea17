<?php// primer layout?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tienda Deportiva</title>
    <style> 

    body{
    background-color: silver;
     }
    
    </style>
</head>
<body>
    <nav>
<ol> 
     <li><a href="Inicio"> Inicio</a></li>
     <li><a href="Menuprincipal"> menu principal</a></li>
     <li><a href="sede"> Sedes </a></li>
     <li><a href="RedesSociales"> Redes sociales</a></li>
		</ol>
</nav>
 <div>
    @section('content')
    @show
</div>
</body>
</html>