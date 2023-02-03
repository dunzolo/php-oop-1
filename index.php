<?php
    // definisco una classe
    class Movie{
        public $title;
        public $director;
        public $language;
        public $year;
        public $age_movie;

        //definisco il costruttore 
        function __construct($_title, $_director, $_language, $_year){
            //con il this faccio riferimento all'istanza creata
            $this -> title = $_title;
            $this -> director = $_director;
            $this -> language = $_language;
            $this -> year = $_year;
        }

        // calcolo l'eta del film
        public function setAge($age){
            $current_year = date('Y');
            $this -> age_movie = $current_year - $age;
        }

        // permetto la visualizzazione a schermo
        public function getAge(){
            return $this -> age_movie;
        }
    }

    // creo gli oggetti dell'istanza Movie, passando parametri obbligatori del costruttore
    $movie_1 = new Movie('Titolo-1', 'Regista-1', 'Lingua-1', 1980);
    $movie_2 = new Movie('Titolo-2', 'Regista-2', 'Lingua-2', 2000);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>PHP Primo Esercizio OOP</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row text-center">
                <h1 class="text-danger">PHP Primo Esercizio OOP</h1>
                <div class="col-12 mt-3">
                    <h2>Primo film</h2>
                    <?php
                        echo "Il titolo del film è: ".$movie_1 -> title."<br>";
                        echo "Il regista del film è: ".$movie_1 -> director."<br>";
                        echo "Il lingua originale del film è: ".$movie_1 -> language."<br>";
                        echo "L'anno in cui è stato prodotto il film è: ".$movie_1 -> year."<br>";
                        $movie_1 -> setAge($movie_1 -> year);
                        echo "Il film è stato prodotto: ".$movie_1 -> getAge()." anni fa.";
                    ?>
                </div>   
                <div class="col-12 mt-3">
                    <h2>Secondo film</h2>
                    <?php
                        echo "Il titolo del film è: ".$movie_2 -> title."<br>";
                        echo "Il regista del film è: ".$movie_2 -> director."<br>";
                        echo "Il lingua originale del film è: ".$movie_2 -> language."<br>";
                        echo "L'anno in cui è stato prodotto il film è: ".$movie_2 -> year."<br>";
                        $movie_2 -> setAge($movie_2 -> year);
                        echo "Il film è stato prodotto: ".$movie_2 -> getAge()." anni fa.";
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>