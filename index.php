<?php  
    include "./Tipologia.php";
    include "./Categoria.php";
    include "./Prodotto.php";

    try{

    

    $cane = new Categoria("Cane","https://images.emojiterra.com/google/android-pie/512px/1f415.png");
    $gatto = new Categoria("Gatto","https://images.emojiterra.com/twitter/v13.1/512px/1f408.png");

    $cibo = new Tipologia("Cibo");
    $gioco = new Tipologia("Giochi");
    $cuccia = new Tipologia("Cucce");


    $prodotto1 = new Prodotto("Scatoletta gourmet tonno", "6,99£" , "https://www.animalhouseitalia.it/16118-large_default/gourmet-gold-85-gr-delizie-in-salsa-tonno-cibo-umido-per-gatto.jpg" , $cibo,  $gatto );
    $prodotto2 = new Prodotto("Scatoletta gourmet pollo", "9,99£" , "https://www.animalhouseitalia.it/16118-large_default/gourmet-gold-85-gr-delizie-in-salsa-tonno-cibo-umido-per-gatto.jpg" , $cibo,  $gatto );
    
    $prodotto1->setPeso(200 , "gr");

    $prodotto2->setCommestibile(true);

    $listaProdotti = [$prodotto1,$prodotto2]; 

    }catch(Exception $e){
        echo "Eccezione: " + $e->getMessage();
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!--carte prodotti-->
        <div class="row flex-column">
            <!--singola card-->
            <?php foreach($listaProdotti as $prodotto){ ?>
                <div class="col">
                    <!--categoria animale-->
                    <div class="row">
                        <div class="col-8">
                            <h1><?php echo $prodotto->getCategoria()->getAnimale()?></h1>
                        </div>
                        <div class="col-4">
                            <img src="<?php echo $prodotto->getCategoria()->getIcona(); ?>" alt="">
                        </div>
                    </div>
                    <!--info prodotto-->
                    <div class="row">
                        <div class="col-6">
                            <p><?php echo $prodotto->getTipologia()->getName(); ?></p>
                            <p><?php echo $prodotto->getNome(); ?></p>
                            <p><?php echo $prodotto->getPrezzo(); ?></p>
                            <?php if($prodotto-> getPeso() != null){ ?>
                                <p>Peso: <?= $prodotto->getPeso() ?></p>
                            <?php } ?>
                            <?php if($prodotto-> getCommestibile() != null ){ ?>
                                <p>Commestibile: <?= $prodotto->getCommestibile() ?></p>
                            <?php } ?>
                        </div>
                        <div class="col-6">
                            <img src="<?php echo $prodotto->getImmagine(); ?>" alt="">
                        </div>
                    </div>
                 </div>
             <?php } ?>
           
        </div>
    </div>
</body>
</html>