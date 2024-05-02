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

    // public function getFullInfo()
    // {
    //     echo "$this->name, $this->director, $this->genre, $this->year, $this->lang";
    // }

    public function getName()
    {
        echo $this->name;
    }

    public function getDirector()
    {
        echo $this->director;
    }

    public function getYear()
    {
        echo $this->year;
    }

    public function getLang()
    {
        echo $this->lang;
    }
}
