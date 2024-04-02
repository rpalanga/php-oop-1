<?php

class Movie
{
    public $name;
    public $playbill;
    public $language;
    public $genre = [];
    public $duration;
    public $description;
    public $director;

    function __construct($_name, $_language, $_description,$_playbill, $_genre)
    {
        $this->name = $_name;
        $this->language = $_language;
        $this->description = $_description;
        $this->playbill = $_playbill;
        $this->genre = $_genre;
        
    }

    public function maker(){
        return $this->name;
    }

    public function type(){
        $newGenre = join(" , ", $this->genre);
        return $newGenre;
        
    }
}