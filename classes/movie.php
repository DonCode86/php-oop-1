<?php

class Movie {
    public $title;
    public $genre;
    public $year;
    public $director;
    public $star;
    public $language;

    public function __construct ($_title, $_year, $_director)
    {
      $this->title = $_title;
      $this->year = $_year;
      $this->director = $_director;
    }

    
}