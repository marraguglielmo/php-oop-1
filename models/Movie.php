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
