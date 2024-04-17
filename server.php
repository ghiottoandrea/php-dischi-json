<?php 

$json_data = file_get_contents('dischi.json');

header('Content-Type: application/json');
echo $json_data;

?>