@extends('layout')
@section('tittle', 'tienda Deportiva')
@section('content')
@parent

<?php
$ropasD = ["Playera deportiva", "Pans deportivo"];
$camisa = array(
    array("Cantidad" => 12, "Accesorio" => "1. Playera ", "precio" => "Q250", "Color"=> "negro", "Tallas"=>"M, S, XL, XXL"),
    array("Cantidad" => 15, "Accesorio" => "2. Pants", "precio" => "Q220","Color"=> " negro ","Tallas"=>"M, S, XL, XXL" )
    
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Deportiva</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h1> Tienda Deportiva "The Best" </h1>
    <h2> Listado de ropa en venta: </h2>
    <?php foreach($ropasD as &$ropaD){
        echo " . $ropaD </br>";
    } ?>
    <h3> Visualizacion de los articulos en venta: </h3>

<ol> 
 <li><img src = "https://m.media-amazon.com/images/I/51-Vt4KYDgL._AC_UF894,1000_QL80_.jpg " alt=" " height = "150">  </li>
 <li><img src = "https://www.muskblog.com/wp-content/uploads/2019/11/PANTS-F50-Holand-Negro-Blanco-Frontal-scaled.png " alt=" " height = "150"></li>
    </ol> 
    <table>
        <tr>
            <th>Accesorio</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Color</th>
            <th>Tallas</th>
            
        </tr>
        <?php foreach ($camisa as &$camisas) { ?>
            <tr>
                <td><?php echo $camisas["Accesorio"]; ?></td>
                <td><?php echo $camisas["Cantidad"]; ?></td>
                <td><?php echo $camisas["precio"]; ?></td>
                <td><?php echo $camisas["Color"]; ?></td>
                <td><?php echo $camisas["Tallas"]; ?></td>

            </tr>
        <?php }
        ?>
</body>
</html>
@endsection