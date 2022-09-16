<?php
    require "class/Personnage.php";
    require "class/Text.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $merlin = new Personnage("Merlin",30,80);
        $harry = new Personnage("Harry",20,100);

        $merlin->setAtk(40);

        var_dump($merlin);
        var_dump($harry);

        $merlin->crier("Leeroy Jenkins");
        $merlin->mort();

        $harry->crier();
        
        $merlin->regenerer(30);
        var_dump($merlin);
        $harry->setAtk(130);
        $harry->attaque($merlin);
        var_dump($merlin);

        // $nombre = new Text();
        // echo $nombre->withZero(8);
        echo Text::withZero(8);
    ?>
</body>
</html>