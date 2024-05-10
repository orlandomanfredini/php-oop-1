<?php

require_once __DIR__ . '/Genre.php';

class Production{
    public $title;
    public $lenguage;
    public $vote;
    public $img;
    public $genre;

    function __construct($_title, $_lenguage, $_vote, $_img, Genre $_genre){
        $this->title = $_title;
        $this->lenguage = $_lenguage;
        $this->vote = $_vote;
        $this->img = $_img;
        $this->genre = $_genre;
    }

    public function renderTitle(){
       return $this->title;
    }
    public function renderLenguage(){
        return $this->lenguage;
     }
    public function renderVote(){
        return $this->vote;
     }
    public function renderImg(){
        return $this->img;
    }
    
    
}


