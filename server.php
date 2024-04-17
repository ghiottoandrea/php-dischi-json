<?php
// Leggi il contenuto del file JSON
$json_data = file_get_contents('dischi.json');

// Decodifica il JSON in un array associativo
$data = json_decode($json_data, true);

// Imposta l'header per indicare che la risposta è in formato JSON
header('Content-Type: application/json');

// Restituisci i dati come risposta
echo json_encode($data);
?>
