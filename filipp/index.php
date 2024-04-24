<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class='container'>
        <div class='row hore text-center'>
            <div class='cl-md-12'>
                <h1>Nadpis</h1>
                <p>Kratky text</p>
            </div>
        </div>

        <div class='row text-center stred'>
            <div class='cl-md-12'>

            <?php
                $ziaci = array('Filip','Jakub','Yevhenii','Simon','Martin','Tereza','Tobias');
                $dni = array('Pondelok','Utorok','Streda','Stvrtok','Piatok','Sobota','Nedela');
                
                sort($ziaci);
                foreach ($ziaci as $x) {
                    echo $x . '<br>';
                }

                echo "<br>";
                foreach ($dni as $x) {
                    echo $x . '<br>';
                }
            ?>

            </div>
        </div>

        <div class='row dole biela'>
            <?php
                for ($x = 0; $x <= 999; $x++) {
                    echo "$x <br>";
                  }
                  
            ?>
        </div>
    </div>
    
</body>
</html>