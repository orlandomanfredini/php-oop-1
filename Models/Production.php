<?php

class Production{
    public $title;
    public $lenguage;
    public $vote;
    public $img;
    public $type;

    function __construct($_title, $_lenguage, $_vote, $_img,  $_type){
        $this->title = $_title;
        $this->lenguage = $_lenguage;
        $this->vote = $_vote;
        $this->img = $_img;
        $this->type = $_type;
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
    public function renderType(){
        return $this->type;
     }
    
}

