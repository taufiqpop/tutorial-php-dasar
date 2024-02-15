<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array</title>
</head>
<body>
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
            <img src="img/<?= $game["poster"]; ?>" height="200px" width="200px" alt="">
            <li>Name : <?= $game["name"]; ?></li>
            <li>Genre : <?= $game["genre"]; ?></li>
            <li>Type : <?= $game["type"]; ?></li>
            <li>Platform : <?= $game["platform"]; ?></li>
            <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>