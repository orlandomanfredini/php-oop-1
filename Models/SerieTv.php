<?php 

require_once __DIR__ . '/Production.php',

class SeriTv extends Production {
    public $numero_stagioni;

    function __construct($_title, $_lenguage, $_vote, $_img, Genre $_genre, $_numero_stagioni = 1){
        parent::__construct($_title, $_lenguage, $_vote, $_img, $_genre);
    }

    public function getStagioni(){
        if($numero_stagioni === ''){
            return 1
        }else
    }
}