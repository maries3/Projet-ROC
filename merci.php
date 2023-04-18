<html>
<head>
<title>Page formulaire</title>
<style>
body
{
	background-color:#6699ff;
}

img{
display:block;
width: 150px;
}
</style>
</head>
<body>

<?php

$servername = "localhost";
$username = "project";
$password = "password";
$dbname = "poubelle";
$date_inscri= date("Y/m/d");
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// définir le mode exception d'erreur PDO 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql= "INSERT INTO `Site` (`NombrePoubelle`,`Adresse`)
VALUES( '$_POST[NombrePoubelle]','$_POST[Adresse]')
";

// utiliser la fonction exec() car aucun résultat n'est renvoyé
  $conn->exec($sql);
echo "Merci, les informations ont bien été enregistré <br> <a href='site.php'>Retour au formulaire</a>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;


?>
<form>
        <input type="button" style="height:35px" value="← revenir à l'accueil "onclick="document.location.href='http://localhost/index.php'";>
</form>

</body>
</html>
