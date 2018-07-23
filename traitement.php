<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tennis Challenge</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/favicon.png" />
</head>

<body>
<div id="contenair2">

<a href="recherche_geva.php">Retour accueil</a>

<h3>Ton pronostic :</h3>
<p>Gagnant : <?php echo $_POST['gagnant']; ?></p>
<p>Finaliste : <?php echo $_POST['finaliste']; ?></p>
<p>Demi1 : <?php echo $_POST['demi1']; ?></p>
<p>Demi2 : <?php echo $_POST['demi2']; ?></p>
<p>Quart1 : <?php echo $_POST['quart1']; ?></p>
<p>Quart2 : <?php echo $_POST['quart2']; ?></p>
<p>Quart3 : <?php echo $_POST['quart3']; ?></p>
<p>Quart4 : <?php echo $_POST['quart4']; ?></p>
</div>


</body>
</html>