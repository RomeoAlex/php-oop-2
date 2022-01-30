<?php 
require_once __DIR__ . '/Automobile.php';
require_once __DIR__ . '/Moto.php';
require_once __DIR__ . '/Autocarro.php';
require_once __DIR__ . '/User.php';
$nuova = new Automobile('Kia', 'Nova', 30000);
var_dump($nuova);
$moto = new Moto('harleyDavidson', 'GT', 40000);

// var_dump($moto);

$scania = new Autocarro('Scania', 'Novalese', 60000 , 3500);


// $scania->$max_carico: 50;
// var_dump($scania);


// utente che compra

$Pino = new User('Pino', 'Zigulì', 'pinozigolo@mail.it');
// aggiungo al cart di pino la moto
// $Pino->cart[] = $moto;
// utilizzo la funzione addTocart
$Pino->addToCart($scania);
var_dump($Pino);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PROVA SHOP</h1>
    <h2>Banvenuto <?php echo $Pino->getFullName(); ?></h2>
</body>
</html>