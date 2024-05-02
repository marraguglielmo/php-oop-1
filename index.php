<?php

class Movie
{
    public $name;
    public $genre;
    public $director;
    public $year;
    public $lang;

    public function __construct(string $_name, array $_genre, string $_director, int $_year, string $_lang)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->year = $_year;
        $this->lang = $_lang;
    }

    public function getFullInfo()
    {
        // converto gli elementi dell'array in una stringa
        $genres = implode(' / ', $this->genre);
        echo "$this->name, $this->director, $genres, $this->year, $this->lang";
    }
}

$film1 = new Movie('Interstellar', ['Fantascienza'], 'Christopher Nolan', 2014, 'EN');
$film2 = new Movie('Le Mans \'66', ['Sportivo', 'Azione'], 'James Mangold', 2019, 'EN');

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
            <div>
                <?php $film1->getFullInfo() ?>
            </div>
            <div>
                <?php $film2->getFullInfo() ?>
            </div>
        </div>
    </div>

</body>

</html>