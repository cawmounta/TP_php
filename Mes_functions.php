<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPphp</title>
</head>
<body>
    <?php

   
        function afficherHello($name){
            echo '<p> Hello ' . $name .'</p>';
        }

        function calculAir($long, $largeur){
            
            $air = $long * $largeur;
            return $air;
        }

    ?>
</body>
</html>
