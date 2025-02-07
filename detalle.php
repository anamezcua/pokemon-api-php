<?php
require_once 'funciones.php'; // Incluye el archivo de funciones

// Verificar si se proporcionó un Pokémon
if (isset($_GET['pokemon'])) {
    $pokemonName = $_GET['pokemon'];
    $data = obtenerDetallesPokemon("https://pokeapi.co/api/v2/pokemon/{$pokemonName}");
} else {
    die("No se ha proporcionado un Pokémon.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de <?php echo ucfirst($pokemonName); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Pokédex</h1>
    <nav>
        <ul>
            <li><a href="index.php">Volver a la lista de Pokémon</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h2><?php echo ucfirst($pokemonName); ?></h2>
    <img src="<?php echo $data['sprites']['front_default']; ?>" alt="<?php echo ucfirst($pokemonName); ?>">
    <p><strong>Altura:</strong> <?php echo $data['height'] / 10; ?> m</p>
    <p><strong>Peso:</strong> <?php echo $data['weight'] / 10; ?> kg</p>
    <p><strong>Tipo(s):</strong> 
        <?php
        foreach ($data['types'] as $type) {
            echo ucfirst($type['type']['name']) . " ";
        }
        ?>
    </p>
</div>

<footer>
    <p>Ana Amezcua González - FOC - 2025</p>
</footer>

</body>
</html>
