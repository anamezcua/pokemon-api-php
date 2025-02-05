<?php
// URL de la API de Pokémon
$url = "https://pokeapi.co/api/v2/pokemon?limit=10";

// Obtener datos de la API
$response = file_get_contents($url);
$data = json_decode($response, true);
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
    <div class="container">
        <h1>Lista de Pokémon</h1>
        <div class="pokemon-list">
            <?php
            foreach ($data['results'] as $pokemon) {
                // Obtener datos de cada Pokémon individualmente
                $pokemonData = json_decode(file_get_contents($pokemon['url']), true);
                $image = $pokemonData['sprites']['front_default'];
                $pokemonName = $pokemon['name'];

                echo "<div class='pokemon-card'>";
                echo "<img src='{$image}' alt='{$pokemonName}'>";
                echo "<h2><a href='detalle.php?pokemon={$pokemonName}'>" . ucfirst($pokemonName) . "</a></h2>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
