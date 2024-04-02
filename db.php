<?php
require './Model/movie.php';
require './Model/director.php';

$movie1 = new Movie("Ritorno al futuro", "Eng", "Marty McFly viaggia indietro nel tempo, sconvolgendo accidentalmente la sua stessa esistenza. Deve riparare il passato per garantirsi il futuro.","https://pad.mymovies.it/filmclub/2006/06/011/locandinapg5.jpg", array("sci-fi", "azione"));

$movie1Director = new Director("Robert", "Zemeckis", "American");
$movie1->director = $movie1Director;

$movie2 = new Movie("Harry Potter", "Ita", "Un orfano scopre di essere un mago, frequenta la scuola di magia Hogwarts e sventa il piano di Lord Voldemort per ottenere la Pietra Filosofale.", "https://static.posters.cz/image/1300/poster/harry-potter-la-pietra-filosofale-i104639.jpg", array("fantasy", "azione"));

$movie2Director = new Director("Chris", "Columbus", "American");
$movie2->director = $movie2Director;


$movie3 = new Movie("Dune- Parte Uno", "Eng", "Paul Atreides, erede di una potente famiglia, viaggia su Arrakis per estrarre una spezia preziosa. Affronta nemici e tradimenti per sopravvivere e realizzare il suo destino.", "https://m.media-amazon.com/images/I/61aBECo7a2L._AC_UF1000,1000_QL80_.jpg", array("sci-fy", "azione"));

$movie3Director = new Director("Denis", "Velleneuve", "Canadian");
$movie3->director = $movie3Director;


$movie4 = new Movie("American Beauty", "Eng", "Un uomo infelice riscopre la bellezza della vita attraverso l'amore di una giovane e l'amicizia di un vicino. Sfida le convenzioni sociali per raggiungere la vera felicità.", "https://pad.mymovies.it/filmclub/2002/08/166/locandina288.jpg", array("introspetivo", "romantico"));

$movie4Director = new Director("Sam", "Mendes", "British");
$movie4->director = $movie4Director;




$movies = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
];


