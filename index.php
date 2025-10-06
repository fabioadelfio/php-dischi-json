<?php

$dischi_text = file_get_contents('./dischi.json');
$dischi = json_decode($dischi_text, true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>PHP Dischi</title>
</head>

<body>
    <h1 class="text-center my-5">Lista Dischi</h1>
    <div class="container">
        <div class="row">
            <?php
            foreach ($dischi as $disco) {
                echo '
                    <div class="col-4 d-flex flex-column align-items-center justify-content-center">
                        <img src=' . $disco['cover'] . ' alt=' . $disco['titolo'] . '>
                        <div class="fw-bold fs-5">' . $disco['titolo'] . '</div>
                    </div>
                    ';
            }
            ?>
        </div>

        <hr>

        <form class="text-center" action="addDisco.php" method="POST">
            <div class="row g-3 fw-bold">
                <div class="col-6">
                    <label for="titolo">Titolo</label>
                    <input id="titolo" name="titolo" type="text" class="form-control" placeholder="Titolo">
                </div>
                <div class="col-6">
                    <label for="artista">Artista</label>
                    <input id="artista" name="artista" type="text" class="form-control" placeholder="Artista">
                </div>
                <div class="col-12">
                    <label for="cover">URL Copertina</label>
                    <input id="cover" name="cover" type="text" class="form-control" placeholder="URL Copertina">
                </div>
                <div class="col-6">
                    <label for="anno">Anno di rilascio</label>
                    <input id="anno" name="anno" type="text" class="form-control" placeholder="Anno di rilascio">
                </div>
                <div class="col-6">
                    <label for="genere">Genere</label>
                    <input id="genere" name="genere" type="text" class="form-control" placeholder="Genere">
                </div>
            </div>
            <br>
            <button class="btn btn-success" type="submit">Aggiungi</button>
        </form>
    </div>
</body>

</html>