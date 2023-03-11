<?php 
// Variabel Scope / lingkup variabel
// SUPERGLOBALS
// variabel global milik PHP
// merupakan array assosiatif
// $_GET (data dikirim lewat url)
// $_POST (data dikirim lewat form)
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <!-- GET -->
    <?php 
        $games = [
            [
                "name" => "Genshin Impact",
                "genre" => "RPG",
                "type" => "Single Player",
                "platform" => "PC",
                "poster" => "Genshin.jpg"
            ],
            [
                "name" => "Point Blank",
                "genre" => "FPS",
                "type" => "Multiplayer",
                "platform" => "PC",
                "poster" => "PB.jpg"
            ],
            [
                "name" => "DreadOut",
                "genre" => "Horror",
                "type" => "Single Player",
                "platform" => "PC",
                "poster" => "DreadOut.jpg"
            ],
            [
                "name" => "Back4Blood",
                "genre" => "Survival Horror",
                "type" => "Multiplayer",
                "platform" => "PC",
                "poster" => "B4B.jpg"
            ],
            [
                "name" => "Internet Cafe Simulator",
                "genre" => "Simulator",
                "type" => "Single Player",
                "platform" => "PC",
                "poster" => "ICS.png"
            ],
            [
                "name" => "Pacify",
                "genre" => "Horror",
                "type" => "Multiplayer",
                "platform" => "PC",
                "poster" => "Pacify.jpg"
            ],
            [
                "name" => "Dying Light 2",
                "genre" => "Survival Horror",
                "type" => "Single Player",
                "platform" => "PC",
                "poster" => "DL2.jpeg"
            ],
            [
                "name" => "GTA San Andreas",
                "genre" => "MMORPG",
                "type" => "Single Player", 
                "platform" => "PC",
                "poster" => "GTASA.jpg"
            ],
            [
                "name" => "Feeding Frenzy",
                "genre" => "Casual",
                "type" => "Single Player",
                "platform" => "PC",
                "poster" => "FF.jpg"
            ],
            [
                "name" => "Osu!",
                "genre" => "Music",
                "type" => "Single Player",
                "platform" => "PC",
                "poster" => "Osu.png"
            ]
        ]
    ?>
    <h1>Daftar Games</h1>
    <ul>
        <?php foreach($games as $game) : ?>
            <li>
                <a href="latihan2.php?name=<?= $game["name"]; ?>
                &genre=<?= $game["genre"];?>
                &type=<?= $game["type"];?>
                &platform=<?= $game["platform"];?>
                &poster=<?= $game["poster"];?>
                "><?= $game["name"];?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>