<?php
 
$reponse = $bdd->query('SELECT * FROM joueurs');
 
while ($donnees = $reponse->fetch())
{
?>
           <option> <?php echo $donnees['prenom']; ?> <?php echo $donnees['nom']; ?> - <?php echo $donnees['classement']; ?> - </option>
<?php
}
 
?>