<?php
/**
 * Obtiene la lista de Pokémon desde la API.
 *
 * @param string $url URL de la API de Pokémon.
 * @return array Datos de los Pokémon en formato JSON decodificado.
 */
function obtenerListaPokemon($url) {
    $response = file_get_contents($url);
    return json_decode($response, true);
}

/**
 * Obtiene los detalles de un Pokémon específico.
 *
 * @param string $url URL del Pokémon en la API.
 * @return array Datos del Pokémon en formato JSON decodificado.
 */
function obtenerDetallesPokemon($url) {
    $response = file_get_contents($url);
    return json_decode($response, true);
}
?>
