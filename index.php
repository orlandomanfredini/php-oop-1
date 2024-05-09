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
    public $img;
    public $type;

    function __construct($_title, $_lenguage, $_vote, $_img,  $_type){
        $this -> title = $_title;
        $this -> lenguage = $_lenguage;
        $this -> vote = $_vote;
        $this -> img = $_img;
        $this -> type = $_type;
    }

    public function renderTitle(){
       return $this -> title;
    }
    public function renderLenguage(){
        return $this -> lenguage;
     }
    public function renderVote(){
        return $this -> vote;
     }
    public function renderImg(){
        return $this -> img;
    }
    public function renderType(){
        return $this -> type;
     }
    
}

$content1 = new Production ('Inception', 'US', 8.5,'https://i.ebayimg.com/images/g/JfYAAOSwIOtbatHS/s-l1200.jpg', 'FILM');
// var_dump($content1);

$content2 = new Production ('Braking Bad', 'US', 8.3,'https://c.wallhere.com/photos/9e/d9/Breaking_Bad-155472.jpg!d', 'SERIES TV');
// var_dump($content2);



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
// var_dump($orlando);





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>HOME</title>
</head>
<body>
   <div class="container p-5">
    <div class="row space-between">
        <div class="col-6 d-flex flex-column">
            <img class="align-self-center" src="<?php echo $content1 -> renderImg() ; ?>" alt="">
            <h3 class="align-self-center mt-3" ><?php echo $content1 -> renderTitle() ; ?></h3>
            <span class="align-self-center" ><?php echo $content1 -> renderLenguage(); ?></span>
            <span class="align-self-center" ><?php echo $content1 -> renderType(); ?> </span>
            <div class="align-self-center" >
                <?php echo $content1 -> renderVote() ?>
            </div>

        </div>
        <div class="col-6 d-flex flex-column">
            <img class="align-self-center" src="<?php echo $content2 -> renderImg() ; ?>" alt="">
            <h3 class="align-self-center mt-3" ><?php echo $content2 -> renderTitle() ; ?></h3>
            <span class="align-self-center" ><?php echo $content2 -> renderLenguage(); ?></span>
            <span class="align-self-center" ><?php echo $content2 -> renderType(); ?> </span>
            <div class="align-self-center" >
                <?php echo $content2 -> renderVote() ?>
            </div>

        </div>
    </div>
   </div> 
</body>
</html>
