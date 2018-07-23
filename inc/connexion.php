
<?php /* connexion BDD*/

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tennis;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
