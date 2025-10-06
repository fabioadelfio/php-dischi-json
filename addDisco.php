<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $newDisco = [
        'titolo' => $_POST['titolo'],
        'artista' => $_POST['artista'],
        'cover' => $_POST['cover'],
        'anno' => (int) $_POST['anno'],
        'genere' => $_POST['genere'],
    ];

    $dischi_text = file_get_contents('./dischi.json');
    $dischi = json_decode($dischi_text, true);

    $dischi[] = $newDisco;

    file_put_contents('dischi.json', json_encode($dischi, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

    header('Location: index.php');
    exit;
}
