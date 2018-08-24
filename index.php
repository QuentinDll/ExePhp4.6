<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <a href="index.php?language=PHP&server=LAMP">000</a>
        <p>
    <?php
    if (isset($_GET['language']) && isset($_GET['server'])){
      echo $_GET['language'] ." ". $_GET['server'] ." ";
    } else {
        echo 'Erreurs dans les paramètres';
    }
    ?>
        </p>
    </body>
</html>
