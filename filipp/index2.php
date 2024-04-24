<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $zoznam_hier = ["Noita","Doom Eternal","Doom 2016","CS2","Rainbow six siege","Helldivers 2",];
        echo print_r($zoznam_hier);
        echo "<br>";
        $zoznam_hier[count($zoznam_hier)-1]="Deep Rock Galactic";
        echo print_r($zoznam_hier);
        echo "<br>";
        $zoo = ["Capybara","Zebra","Slon","Žirafa","Tučniak","Leopard"];
        echo in_array("Slon",$zoo);
        echo "<br>" . $zoo[in_array("Slon",$zoo)+1];
        


    ?>
    
</body>
</html>