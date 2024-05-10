<?php
include_once __DIR__ . '/Models/Movie.php';


$contents = [
    new Movie ('Inception', 'US', 8.5,'https://i.ebayimg.com/images/g/JfYAAOSwIOtbatHS/s-l1200.jpg', new Genre('FILM', 'GRAN BEL FILM'), 200,2.10 ),
    new Movie ('Braking Bad', 'US', 8.3,'https://c.wallhere.com/photos/9e/d9/Breaking_Bad-155472.jpg!d',  new Genre('FILM', 'GRAN BEL FILM'),180, 1.40),
    new Movie ('Ophenaimer', 'UK', 9.6, 'https://static.sky.it/images/skytg24/it/spettacolo/cinema/2023/05/08/oppenheimer-trailer/oppenheimer-locandina.jpg.transform/original/15668a6b23b07f7b3d8b3a5a728f36e48f1a21a2/img.jpeg',  new Genre('FILM', 'GRAN BEL FILM'), 102, 140),
    new Movie ('The Great Gatsby', 'US', 8.1, 'https://m.media-amazon.com/images/I/51P+zLNbeCL._SL500_.jpg', new Genre('FILM', 'GRAN BEL FILM'),160, 2.00),
    new Movie ('The Big Bang Theory', 'US', 8.3,'https://static.posters.cz/image/1300/art-photo/the-big-bang-theory-equipaggio-i106240.jpg',  new Genre('FILM', 'GRAN BEL FILM'),120, 1.30),
    new Movie ('Notte da leoni', 'US', 8.3,'https://image.tmdb.org/t/p/original/3hc7c0AL1VZ4dh2fae4SryeOpmp.jpg',  new Genre('FILM', 'GRAN BEL FILM'),120, 1.30)
    
];

include_once __DIR__ . '/Models/LinkHeader.php';

$links = [
    new Links ('Menu', '#'),
    new Links ('Shop', '#'),
    new Links ('Contact', '#'),
    new Links ('About us', '#'),
];

