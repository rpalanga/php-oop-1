<?php
class Director {
    public $name;
    public $surname;
    public $nationality;


    function __construct($_name, $_surname, $__nationality)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->nationality = $__nationality;
        
    }

    public function getDirector(){
        return $this->name . ' ' . $this->surname . ' , ' . $this->nationality;
    }
}