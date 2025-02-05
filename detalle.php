<?php
if (isset($_GET['pokemon'])) {
    $pokemonName = $_GET['pokemon'];
    $url = "https://pokeapi.co/api/v2/pokemon/{$pokemonName}";

    // Obtener datos de la API
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    // Enviar la respuesta en formato JSON
    header('Content-Type: application/json');
    echo json_encode($data, JSON_PRETTY_PRINT);
} else {
    echo json_encode(["error" => "No se ha proporcionado un Pokémon"], JSON_PRETTY_PRINT);
}
