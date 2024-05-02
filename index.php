<?php

require_once __DIR__ . '/models/Movie.php';

$film1 = new Movie('Interstellar', ['Fantascienza'], 'Christopher Nolan', 2014, 'EN');
$film2 = new Movie('Le Mans \'66', ['Sportivo', 'Azione'], 'James Mangold', 2019, 'EN');

// var_dump($film2)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
    <title>PHP OOP 1</title>
</head>

<body>

    <div class="container my-4">
        <h1 class="text-center">PHP OOP 1</h1>
        <div class="container">
            <h3>Film</h3>
            <div class="row row-cols-4 ">
                <!-- col 1 -->
                <div class="col">
                    <div class="gm_card text-center border border-2 rounded-2 py-3">
                        <h4>
                            <?php $film1->getName() ?>
                        </h4>
                        <div>
                            <span class=" font-monospace">Regista:</span>
                            <?php $film1->getDirector() ?>
                        </div>
                        <div>
                            <span class=" font-monospace">Genere:</span>
                            <?php foreach ($film1->genre as $genere) : ?>
                                <span>
                                    <?php echo $genere ?>
                                </span>
                            <?php endforeach ?>
                        </div>
                        <div>
                            <span class=" font-monospace">Anno:</span>
                            <?php $film1->getYear() ?>
                        </div>
                        <div>
                            <span class=" font-monospace">Lingua:</span>
                            <?php $film1->getLang() ?>
                        </div>
                    </div>
                </div>
                <!-- col 2 -->
                <div class="col">
                    <div class="gm_card text-center border border-2 rounded-2 py-3">
                        <h4>
                            <?php $film2->getName() ?>
                        </h4>
                        <div>
                            <span class=" font-monospace">Regista:</span>
                            <?php $film2->getDirector() ?>
                        </div>
                        <div>
                            <span class=" font-monospace">Genere:</span>
                            <?php foreach ($film2->genre as $genere) : ?>
                                <span>
                                    <?php echo $genere ?>
                                </span>
                            <?php endforeach ?>
                        </div>
                        <div>
                            <span class=" font-monospace">Anno:</span>
                            <?php $film2->getYear() ?>
                        </div>
                        <div>
                            <span class=" font-monospace">Lingua:</span>
                            <?php $film2->getLang() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>