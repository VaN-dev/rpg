<?php

require_once("../src/Model/Map.php");

$map = new Map(20, 30);

?>

<html>
<head>
    <title>RPG</title>
    <link rel="stylesheet" type="text/css" href="css/layout.css">
</head>
<body>
    <h1>RPG</h1>

    <div class="map-container">
        <?php
        $output = $map->draw();
        echo $output;
        ?>
    </div>
</body>
</html>