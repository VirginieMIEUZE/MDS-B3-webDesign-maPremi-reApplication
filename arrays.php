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
    // Je déclare un tableau
    $array = array('pomme', 'cerise', 'orange', 'clémentine');

    echo '<pre>';
    print_r($array);
    echo '</pre>';

    foreach ($array as $value) {
      echo $value . '</br>';
    }

    $associateArray = array(
      'key' => 'valeur',
      'last_name' => 'Doe',
      'first_name' => 'John',
      'age' => 25, 
    );

    echo '<pre>';
    print_r($associateArray);
    echo '</pre>';

    echo $associateArray['first_name'];

    echo '</br>';

    $sizeArray = sizeof($associateArray);
    echo $sizeArray;

  ?>

</body>
</html>