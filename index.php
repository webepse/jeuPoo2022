<?php
    require "class/Personnage.php";
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

        var_dump($merlin);
        var_dump($harry);
    ?>
</body>
</html>