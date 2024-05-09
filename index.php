<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi
 d’istanza che abbiamo visto stamattina e create un file index.php in cui 
 è definita una classe Production che rappresenta una produzione cinematografica / televisiva.
All’interno della classe dovrete gestire un titolo, una lingua e un voto 
(su una scala da 1 a 10).
La classe deve avere le sue variabili d’istanza, il costruttore e i metodi.
Istanziate poi almeno due oggetti Production e stampate in pagina i loro valori,
 con un layout a vostro piacere. -->

<?php

class Production{
    public $title;
    public $lenguage;
    public $vote;
    public $type;

    function __construct($_title, $_lenguage, $_vote, $_type){
        $this -> title = $_title;
        $this -> lenguage = $_lenguage;
        $this -> vote = $_vote;
        $this -> type = $_type;
    }

    public function setName($name){
        $this -> title = $name;
    }
}

$content1 = new Production ('Inception', 'US', 8.5, 'FILM');
var_dump($content1);

$content2 = new Production ('Braking Bad', 'US', 8.3, 'SERIES TV');
var_dump($content2);



// prova composizione


class User {
    public $name;
    public $address;

    function __construct($_name, Address $_address){
        $this -> name = $_name;
        $this -> address = $_address;

    }
    
}

class Address {
    public $city;
    public $street;
    public $postal_code;


    function __construct($_city, $_street, $_postal_code){
        $this -> city = $_city;
        $this -> street = $_street;
        $this -> postal_code = $_postal_code;
    }
}

$orlando = new User ('Orlando', new Address('Ferrara', 'Via delle volte', 44121));
var_dump($orlando);





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
</body>
</html>
