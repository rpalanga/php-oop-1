<?php

class Movie
{
    public $name;
    public $playbill;
    public $language;
    public $genre = [];
    public $duration;
    public $description;
    public $director;

    function __construct($_name, $_language, $_description,$__playbill, $__genre)
    {
        $this->name = $_name;
        $this->language = $_language;
        $this->description = $_description;
        $this->playbill = $__playbill;
        $this->genre = $__genre;
    }

    public function maker(){
        return $this->name;
    }

    public function type(){
        $newGenre = join(" , ", $this->genre);
        return $newGenre;
        
    }
}

$movie1 = new Movie("Ritorno al futuro", "Eng", "Marty McFly viaggia indietro nel tempo, sconvolgendo accidentalmente la sua stessa esistenza. Deve riparare il passato per garantirsi il futuro.","https://pad.mymovies.it/filmclub/2006/06/011/locandinapg5.jpg", array("sci-fi", "azione"));
$movie2 = new Movie("Harry Potter", "Ita", "Un orfano scopre di essere un mago, frequenta la scuola di magia Hogwarts e sventa il piano di Lord Voldemort per ottenere la Pietra Filosofale.", "https://static.posters.cz/image/1300/poster/harry-potter-la-pietra-filosofale-i104639.jpg", array("fantasy", "azione"));
$movie3 = new Movie("Dune- Parte Uno", "Eng", "Paul Atreides, erede di una potente famiglia, viaggia su Arrakis per estrarre una spezia preziosa. Affronta nemici e tradimenti per sopravvivere e realizzare il suo destino.", "https://m.media-amazon.com/images/I/61aBECo7a2L._AC_UF1000,1000_QL80_.jpg", array("sci-fy", "azione"));
$movie4 = new Movie("American Beauty", "Eng", "Un uomo infelice riscopre la bellezza della vita attraverso l'amore di una giovane e l'amicizia di un vicino. Sfida le convenzioni sociali per raggiungere la vera felicità.", "https://pad.mymovies.it/filmclub/2002/08/166/locandina288.jpg", array("introspetivo", "romantico"));

$movies = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
];







?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop</title>
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="contianer-fluid">
        <div class="container">
            <h1 class="display-1 text-success p-4 rounded-4 text-center my-5 link-underline-secondary bg-opacity-75 bg-black fw-bold">Choose your Movie</h1>

        </div>
        <div class="container d-flex  justify-content-center gap-2  ">

            
                <?php
                foreach ($movies as $movie) {
                    echo "
                        <div class='card border-0 mb-4 w-100' style= 'width= calc(100% / 2)'>
                            <img src=" . $movie->playbill . " class=' ' style='height: 380px;'>

                            <div class='card-body text-white bg-opacity-75 bg-black  rounded-bottom-3 '>
                            <h5 class='card-title text-center fw-bold fs-4 '>" . $movie->maker() . "</h5>
                            <p class='card-text text-center'>Lingua: " . $movie->language . "</p>
                            <p >" . $movie->description . "</p>
                            <p > Genere: " . $movie->type() . ".</p>

                            

                            </div>
                        </div>";
                }
                ?>
            

        </div>
    </div>







    <!-- boostrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>


<!-- 
<img src="..." class='card-img-top'>
 -->