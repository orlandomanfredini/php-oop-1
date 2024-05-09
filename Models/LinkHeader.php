<?php

class Links{
    public $title;
    public $url;

    function __construct($_title, $_url){
        $this->title = $_title;
        $this->url = $_url;
    }

    public function linkTitle(){
        return $this-> title;
    }

    public function linkUrl(){
        return $this->url;
    }
}

?>