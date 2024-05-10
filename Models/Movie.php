<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production{
    public $profitti;
    public $durata;
    
    function __construct($_title, $_lenguage, $_vote, $_img, Genre $_genre, $_profitti, $_durata){
        parent::__construct($_title, $_lenguage, $_vote, $_img, $_genre);
        $this->profitti= $_profitti;
        $this->durata=$_durata;
    }

    public function stampaDati(){
        var_dump($this->$profitti, $this->$_title);
    }
    
};