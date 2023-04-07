<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat's API</title>
</head>
<body>

<?php

define('CAT_API_KEY', 'live_8HCpuI7FPIb0j3JLO5PnZnLQFdgHhx3Q8vDIZR6UfcCOG4IWcK9Wo92ymu0w1DCc');

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.thecatapi.com/v1/images/search?has_breeds=1',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

// On ajoute la clef d'API obtenue sur le site CAT's API
// Cela permet d'avoir plus de fonctionnalités sur cette API
$headers = [
    'x-api-key: ' . CAT_API_KEY
];

// On ajoute l'information dans les Headers de l'appel d'API
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($curl);

curl_close($curl);

$responseJson = json_decode($response);
$cat = $responseJson[0];
$catUrl = $cat->url;
$breed = $cat->breeds[0];

//echo '<pre>';
//print_r($breed);
//echo '</pre>';

?>

<h1><?php echo $breed->name; ?></h1>
<h2>Origine : <?php echo $breed->origin ?></h2>
<p><?php echo $breed->description ?></p>

<img src="<?php echo $catUrl; ?>" alt="chaton" width="500">
    
</body>
</html>