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
        function showText(string $text) {
            echo $text;
            echo '<br/>';
        }

        showText('Hello World!');

        function addition(int $number1, int $number2) {
            return $number1 + $number2;
        }

        showText(addition(1,2));

        function toUppercase(string $text) {
            return strtoupper($text);
        }

        showText(toUppercase('Hello World!'));

    ?>

</body>
</html>