<?php 

class Movie{
    public $name;
    public $language;
    public $genre;
    public $duration;
    public $description;
    public $director;

    function __construct($_name,$_language,$_description)
    {
        $this->name = $_name;
        $this->language = $_language;
        $this->description = $_description;

    }
}

$movie1 = new Movie("Ritorno al futuro","Eng","Marty McFly viaggia indietro nel tempo, sconvolgendo accidentalmente la sua stessa esistenza. Deve riparare il passato per garantirsi il futuro.");
$movie2 = new Movie("Harry Potter", "Ita","Un orfano scopre di essere un mago, frequenta la scuola di magia Hogwarts e sventa il piano di Lord Voldemort per ottenere la Pietra Filosofale.");
$movie3 = new Movie("Dune", "Eng", "Paul Atreides, erede di una potente famiglia, viaggia su Arrakis per estrarre una spezia preziosa. Affronta nemici e tradimenti per sopravvivere e realizzare il suo destino.");
$movie4 = new Movie("American Beauty", "Eng", "Un uomo infelice riscopre la bellezza della vita attraverso l'amore di una giovane e l'amicizia di un vicino. Sfida le convenzioni sociali per raggiungere la vera felicità.");









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
            <h1 class="display-1 text-success-emphasis ">hello world</h1>

            <ul>
                <?php
                foreach(movies in movie)
                <li>

                </li>
                ?>
            </ul>

        </div>
    </div>







    <!-- boostrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>