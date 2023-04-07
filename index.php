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

  $last_name = 'Doe';
  $first_name = 'John';
  $age = 18;
  $address = '2 rue de quelque-part, 44000, Nantes';
  $isStudent = true;

  echo 'Nom : ' .$last_name .'</br>';
  echo 'Prénom : ' .$first_name .'</br>';
  echo 'Age : ' .$age .'</br>';
  echo 'Adresse : ' .$address .'</br>';
  echo 'Est-il étudiant ? ' .$isStudent .'</br>';

  echo '</br>';
  echo '--- Opérations mathématiques --- <br/>';

  $a = 5;
  $b = 10;
  $c = 15;

  $result = $a + $b;
  echo $result;

  ?>

</body>
</html>