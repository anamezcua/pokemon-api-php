<?php
require_once 'funciones.php'; // Incluye el archivo de funciones

// URL de la API de Pokémon
$url = "https://pokeapi.co/api/v2/pokemon?limit=10";

// Obtener datos de la API
$data = obtenerListaPokemon($url);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon API</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>POKEDEX</h1>
</header>

<div class="container">
    <h2>Lista de Pokémon</h2>
    <div class="pokemon-list">
        <?php
        foreach ($data['results'] as $pokemon) {
            $pokemonData = obtenerDetallesPokemon($pokemon['url']);
            $image = $pokemonData['sprites']['front_default'];
            $pokemonName = $pokemon['name'];

            echo "<div class='pokemon-card'>";
            echo "<img src='{$image}' alt='{$pokemonName}'>";
            echo "<h3><a href='detalle.php?pokemon={$pokemonName}'>" . ucfirst($pokemonName) . "</a></h3>";
            echo "</div>";
        }
        ?>
    </div>
</div>

<footer>
    <p>Ana Amezcua González - FOC - 2025</p>
</footer>

</body>
</html>
