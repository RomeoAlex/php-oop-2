<?php 
require_once __DIR__ . '/Automobile.php';
require_once __DIR__ . '/Moto.php';
require_once __DIR__ . '/Autocarro.php';
require_once __DIR__ . '/User.php';
$nuova = new Automobile("Kia", "Nova", 30000);
// var_dump($nuova);
$moto = new Moto('harleyDavidson', 'GT', 40000);
// var_dump($moto);

// personalizzazione con try e catch di un eventuale errore
try{
    $scania = new Autocarro('Scania', 'Novalese', 60000 , 'patate');
} catch(Exception $e){
    // Gestiamo l'errore
    echo 'inserimento dati non corretto' . $e->getMessage();
}

// $scania->$max_carico: 50;

// posso inserire le variabili di Prodotto contabile
$scania->n_fattura = 3421;
var_dump($scania);


// utente che compra

$pino = new User('Pino', 'Caciotta', 'pinozigolo@mail.it');
// aggiungo al cart di pino la moto
// $Pino->cart[] = $moto;
// utilizzo la funzione addTocart
$pino->addToCart($nuova);
$pino->addToCart($scania);
$pino->addToCart($moto);
// var_dump($Pino);
$pino_cart = $pino->printCart();
var_dump($pino_cart);
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
    <?php echo '<h2>Benvenuto' . $pino->printUser() . '</h2>'; ?>
    
    <?php foreach ($pino_cart as $products) { ?>
        
    <div>
        <h3>
        <?php echo $products->marca; ?> - <?php echo $products->modello; ?>
        </h3>
        <div>
            <h3>Numero ruote:<?php echo $products->ruote; ?></h3>
            <h3>
            <?php echo $products->prezzo; ?>
            </h3>
        </div>
    </div>
    <?php } ?>
</body>
</html>