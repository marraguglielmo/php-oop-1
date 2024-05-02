<?php

class Movie
{
    public $name;
    public $director;
    public $lang;
    public $year;

    public function __construct(string $_name, string $_director, int $_year)
    {
        $this->name = $_name;
        $this->director = $_director;
        $this->year = $_year;
    }
}

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
    </div>

</body>

</html>