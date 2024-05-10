<?php

include_once __DIR__ . '/Models/Production.php';
include_once __DIR__ . '/Models/Movie.php';


$contents = [
    new Production ('Inception', 'US', 8.5,'https://i.ebayimg.com/images/g/JfYAAOSwIOtbatHS/s-l1200.jpg', new Genre('FILM', 'GRAN BEL FILM')),
    new Production ('Braking Bad', 'US', 8.3,'https://c.wallhere.com/photos/9e/d9/Breaking_Bad-155472.jpg!d',  new Genre('FILM', 'GRAN BEL FILM')),
    new production ('Ophenaimer', 'UK', 9.6, 'https://static.sky.it/images/skytg24/it/spettacolo/cinema/2023/05/08/oppenheimer-trailer/oppenheimer-locandina.jpg.transform/original/15668a6b23b07f7b3d8b3a5a728f36e48f1a21a2/img.jpeg',  new Genre('FILM', 'GRAN BEL FILM')),
    new Production ('The Great Gatsby', 'US', 8.1, 'https://m.media-amazon.com/images/I/51P+zLNbeCL._SL500_.jpg', new Genre('FILM', 'GRAN BEL FILM')),
    new Production ('The Big Bang Theory', 'US', 8.3,'https://static.posters.cz/image/1300/art-photo/the-big-bang-theory-equipaggio-i106240.jpg',  new Genre('FILM', 'GRAN BEL FILM')),
    new Production ('Parasite', 'CH', 8.9, 'https://pad.mymovies.it/cinemanews/2019/163062/locandina-ver.jpg',  new Genre('FILM', 'GRAN BEL FILM')),
];

include_once __DIR__ . '/Models/LinkHeader.php';

$links = [
    new Links ('Menu', '#'),
    new Links ('Shop', '#'),
    new Links ('Contact', '#'),
    new Links ('About us', '#'),
];

$istanza1 = new Movie('Amore mio', 'IT', 7, 'https://m.media-amazon.com/images/I/81LiSTdIA1L._AC_UF1000,1000_QL80_.jpg', new Genre ('film', 'BEL FILM'));