<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Port</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
         
        $flux = fopen("/dev/ttyACM0", "r");
        //  var_dump($flux);
        if (!$flux) {
            echo '<font color="red">Erreur d\'initialisation de la communication.</font>';
        } 
        else {
            //fputs($flux, '1?'."\r\r");
            echo 'Donnée lue&nbsp;pour conteneur 1  :  ';
            $resultat = fgets($flux, 4096); 
            //var_dump($resultat);
            echo $resultat;
            header ("refresh: 2");
            fclose($flux);
        }
 ?>
 <br>
<?php

// Connexion à la base de données
$connexion = mysqli_connect("localhost", "project", "password", "poubelle");

// Vérifier la connexion
if (!$connexion) {
    die("La connexion a échoué: " . mysqli_connect_error());
}
$pourcentage = $resultat; // Assigner la valeur de $resultat à $pourcentage
$id = 13;
// Insertion des données dans la base de données
$sql = "UPDATE stokage SET pourcentage='$pourcentage' WHERE id = $id";

if (mysqli_query($connexion, $sql)) {
    echo "Les données ont été ajoutées avec succès.";
} else {
    echo "Erreur: " . mysqli_error($connexion);
}


// Fermeture de la connexion à la base de données
mysqli_close($connexion);

?>

<br>







<?php
         
         $flux = fopen("/dev/ttyACM0", "r");
         //  var_dump($flux);
         if (!$flux) {
             echo '<font color="red">Erreur d\'initialisation de la communication.</font>';
         } 
         else {
             //fputs($flux, '1?'."\r\r");
             echo 'Donnée lue&nbsp;pour conteneur 2  :  ';
             $resultat = fgets($flux, 4096); 
             //var_dump($resultat);
             echo $resultat;
             header ("refresh: 3");
             fclose($flux);
         }
  ?>

<br>
 <?php
 
 // Connexion à la base de données
 $connexion = mysqli_connect("localhost", "project", "password", "poubelle");
 
 // Vérifier la connexion
 if (!$connexion) {
     die("La connexion a échoué: " . mysqli_connect_error());
 }
 $pourcentage = $resultat; // Assigner la valeur de $resultat à $pourcentage
 $id = 14;
 // Insertion des données dans la base de données
 $sql = "UPDATE stokage SET pourcentage='$pourcentage' WHERE id = $id";
 
 if (mysqli_query($connexion, $sql)) {
     echo "Les données ont été ajoutées avec succès.";
 } else {
     echo "Erreur: " . mysqli_error($connexion);
 }
 
 
 // Fermeture de la connexion à la base de données
 mysqli_close($connexion);
 
 ?>







<br>
<?php
         
         $flux = fopen("/dev/ttyACM0", "r");
         //  var_dump($flux);
         if (!$flux) {
             echo '<font color="red">Erreur d\'initialisation de la communication.</font>';
         } 
         else {
             //fputs($flux, '1?'."\r\r");
             echo 'Donnée lue&nbsp;pour conteneur 3  :  ';
             $resultat = fgets($flux, 4096); 
             //var_dump($resultat);
             echo $resultat;
             header ("refresh: 4");
             fclose($flux);
         }
  ?>
  <br>
 <?php
 
 // Connexion à la base de données
 $connexion = mysqli_connect("localhost", "project", "password", "poubelle");
 
 // Vérifier la connexion
 if (!$connexion) {
     die("La connexion a échoué: " . mysqli_connect_error());
 }
 $pourcentage = $resultat; // Assigner la valeur de $resultat à $pourcentage
 $id = 15;
 // Insertion des données dans la base de données
 $sql = "UPDATE stokage SET pourcentage='$pourcentage' WHERE id = $id";
 
 if (mysqli_query($connexion, $sql)) {
     echo "Les données ont été ajoutées avec succès.";
 } else {
     echo "Erreur: " . mysqli_error($connexion);
 }
 
 
 // Fermeture de la connexion à la base de données
 mysqli_close($connexion);
 
 ?>
</body>
</html>