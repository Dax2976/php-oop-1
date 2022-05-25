<?php

class Movie{
    public $title;
    public $genere;
    public $durata;
    public $regista;

        // metodo
    public function getTitle(){
    return $this->title;
    }

    // costruttore

    public function __construct($title,$genere,$durata,$regista){
        $this->title = $title;
        $this->genere = $genere;
        $this->durata = $durata;
        $this->regista = $regista;
    }
}

// istanza movie x2

$movies=[
    new Movie('Una Notte Da Leoni','Commedia','99 Minuti','Todd Phillips' ),
    new Movie('Scary Movie','Comico,Commedia','88 Minuti','Keenen Ivory Wayans'),
    new Movie('3ciento - Chi l ha duro... la vince','Comico','84 Minuti','Jason Friedberg, Aaron Seltzer')
]; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>php oop1</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="">
                    <h1>Movies</h1>
                </div>
            </div>
        </div>
        <?php
            foreach($movies as $movie) :?>
            <div class="col-4 mx-3">
                <div class="card p-2" style="width:300px">
                    <span>Titolo:
                        <h3><?= $movie -> getTitle(); ?> </h3>
                    </span>
                    <span>Genere:
                        <h3><?= $movie -> genere; ?> </h3>
                    </span>
                    <span>Durata:
                        <h3><?= $movie -> durata; ?> </h3>
                    </span>
                    <span>Regista:
                        <h3><?= $movie -> regista; ?> </h3>
                    </span>
                </div>
            </div>
            <?php endforeach ?>
    </div>
</body>
</html>
