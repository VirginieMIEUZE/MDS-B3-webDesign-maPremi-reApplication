<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        // Je déifnis ma vitesse max
        define('VITESSE_MAXIMUM', 50);
        // Je définis une vitesse

        $vitesse = random_int(10, 75);
        echo 'Vous roulez à ' .$vitesse .'km/h </br>';

        if ($vitesse > VITESSE_MAXIMUM) {
            echo 'Vous roulez trop vite ! </br>';
        } else {
            echo 'Vous roulez tranquillement </br>';
        }

        $race = 'elfe';

        if ($race == 'elfe') {
            echo 'Vous êtes un elfe ! </br>';
            echo 'Je suis nyctalope !';
        } elseif ($race == 'nain') {
            echo 'Vous êtes un nain ! </br>';
            echo 'Chaussette !';
        } elseif ($race == 'humain') {
            echo 'Vous êtes un humain ! </br>';
            echo 'Maaaaaaaais...';
        }
    ?>

</body>
</html>