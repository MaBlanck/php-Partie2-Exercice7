<?php
$isOk = 1;
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 7 Partie 2</title>
</head>
<body>
    <h1>Exercice 7 Partie 2</h1>

    <p><?php
    if($isOk == false)
    {
        echo 'c\'est pas bon !!!';
    }
    else 
    {
        echo 'c\'est ok !!';
    }
    ?></p>

</body>
</html>