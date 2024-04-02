<?php



require './db.php';







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
                            <p >Regia: " . $movie->director->getDirector() . "</p>


                            

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


