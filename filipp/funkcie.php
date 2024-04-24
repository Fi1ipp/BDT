<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function fas() {
            echo "mat";
        }
     
        function kofas() {
            return "pat";
        }

        function profifas($a,$b) {
            return "a + b = " . ($a+$b);
        }
    

        fas(); echo "<br>";
        echo kofas(); echo "<br>";
        echo profifas(5,7); echo "<br>";


    ?>
</body>
</html>