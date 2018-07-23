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
<div id="contenair">
<?php
     include("inc/connexion.php");
?>
<form method="POST" action="traitement.php">
    <div id="gagnant">
    <p>Gagnant et Finaliste</p>
    <p>
        <label for="gagnant">Le Gagnant</label>
        <select name="gagnant" id="gagnant1">
		<?php
     include("inc/affichagejoueurs.php");
?>
</select>
		
    </p>
       <p>
        <label for="finaliste">Le Finaliste</label>
        <select name="finaliste" id="finaliste1">
           <?php
     include("inc/affichagejoueurs.php");
?>
</select>
        
		</p>
    </div>
	
    <div id="demi"> 
    <p>Demi-finaliste</p> 
    <p>
        <label for="demi1">Demi 1</label>
        <select name="demi1" id="demi1">
            <?php
     include("inc/affichagejoueurs.php");
?>
</select>
    </p>
    <p>
        <label for="demi2">Demi 2</label>
        <select name="demi2" id="demi2">
        <?php
     include("inc/affichagejoueurs.php");
?>
</select>
    </p>      
    </div>
    <div id="quart">
    <p>Quart de finaliste</p>
    <p>
        <label for="quart1">Quart 1</label>
        <select name="quart1" id="quart1">
            <?php
     include("inc/affichagejoueurs.php");
?>
</select>
    </p>
    <p>
        <label for="quart2">Quart 2</label>
        <select name="quart2" id="quart2">
          <?php
     include("inc/affichagejoueurs.php");
?>
</select>
    </p>
    <p>
        <label for="quart3">Quart 3</label>
        <select name="quart3" id="quart3">
  <?php
     include("inc/affichagejoueurs.php");
?>
</select>
    </p>
    <p>
        <label for="quart4">Quart 4</label>
        <select name="quart4" id="quart4">
           <?php
     include("inc/affichagejoueurs.php");
?>
</select>
    </p>
    </div>
	<div>
	<input type="submit"  name="valider" value="Valider vos choix !">
	<input type="reset" value="Tout recommencer !">
	</div>
	</form>
</div>
</body>

</html>
