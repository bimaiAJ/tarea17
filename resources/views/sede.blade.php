@extends('layout')
@section('tittle', 'tienda Deportiva')
@section('content')
@parent
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Sedes de nuestras tiendas </h1>
    <ol> 
    <?php echo "Sede en zona 10 " ?>
 <li><img src = "https://previews.123rf.com/images/radub85/radub851501/radub85150100555/35936618-bucarest-rumania-28-de-enero-de-2015-ventas-de-descuento-en-la-tienda-adidas-adidas-es-una.jpg " alt=" " height = "150">  </li>
 <?php echo "                           "?>
 <?php echo "Sede en zona 4 " ?>
 <li><img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJGUli56PMuUhqmlPSLESAUy2yjHmLSz53SQ&usqp=CAU " alt=" " height = "150"></li>
    </ol> 
</body>
</html>

@endsection