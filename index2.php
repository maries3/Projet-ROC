<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <title>ROC</title>
      <link href="css.css" rel="stylesheet" type="text/css">

   </head>
   <script>
  // Actualisation toutes les 10 secondes
  setInterval(function() {
    location.reload();
  }, 10000);
</script>
 <?php


$servername = "localhost";
$username = "project";
$password = "password";




try {
  $conn = new PDO("mysql:localhost=$servername;dbname=poubelle", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

echo'<br>';

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
                $mysqli->set_charset("utf8");
                $requete = "SELECT `id`,`date` FROM `stokage` WHERE `id`=13 ";
                $resultat = $mysqli->query($requete);

?>
  
<body>
     
	<header>
            <tr>
                  <h1 rowspan="1" align="center" > Liste des sites existants : </td></tr></h1>
                  

            </tr>
             <table>

               <tr>
                  <td align="center"><h3> Site 1 </h3></td>
                  <td align="center"><h3> Taux de remplissage </h3></td>
                  <td align="center"><h3> Dernier ramassage </h3></td>
                  <td align="center"><h3> Fréquence de remplissage </h3></td>
                  <td align="center"><h3> Adresse : Rue Saint-Pierre, 84000 Avignon </h3></td>
                  <td align="center"><h3> Ramassage </h3></td>

               </tr>

               <tr>
                  <td align="center"> <img src="poubelle.png" alt="" style="width: 200" height="200" > 
                 <td align="center"> <div align="center" class="progress-circle thin" data-value="<?php

//connexion à la base de donnée pour mettre le pourcentage

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
                $mysqli->set_charset("utf8");
                $requete = "SELECT `id`,`pourcentage` FROM `stokage` WHERE `id`=13 ";
                $resultat = $mysqli->query($requete);


                while ($ligne = $resultat->fetch_assoc()) {
                        echo $ligne['pourcentage'];
                        $pourcentage = $ligne['pourcentage'];
                }
                $mysqli->close();
                ?>">

                
                     <div class="progress-masque">
                        <div class="progress-barre"></div>
                        <div class="progress-sup50"></div>
                     </div>
                  </div>
		  <td align="center"> <h3> 
<?php


$mysqli = new mysqli("localhost", "project", "password", "poubelle");
                $mysqli->set_charset("utf8");
                $requete = "SELECT `id`,`date` FROM `stokage` WHERE `id`=13 ";
                $resultat = $mysqli->query($requete);


                while ($ligne = $resultat->fetch_assoc()) {
                        echo $ligne['date'] . '' . $ligne['heure'] . '' . $ligne['frequence'] .  '<br>';
                }
                $mysqli->close();

?>

</h3></td>
                 
                  <td align="center"> <h3>2 semaines</h3></td>
                  <td rowspan="3"><iframe src="https://www.google.com/maps/d/embed?mid=1a_IfkvlcD117NNpIqbSaqxzCKAxLqk4&ehbc=2E312F" width="700vw" height="650vw"></iframe></td>
                  <td align = center> <h3> <?php
                  if ($pourcentage>= 50 && $pourcentage <= 79) {
                     echo '<span style="color: yellow;">Le conteneur 1 peut-être ramasser</span>';
                  }
                  if ($pourcentage>= 80) {
                     echo '<span style="color: #d34c4c;">Le conteneur 1 doit être ramasser</span>';
                     
                  }
                  if ($pourcentage< 50) {
                     echo '<span style="color: #00CC00">Le conteneur 1 peut-être ramasser</span>';
                     
                  }
                  
                  ?>
                  </h3>
                  </td>
                  </td>
                  </td>
               
               </tr>
               
               <tr>
                  <br> <td align="center"> <img src="poubelle.png" alt="" style="width: 200" height="200" > 
                     <td align="center">  <div align="center" class="progress-circle thin" data-value="<?php

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
                $mysqli->set_charset("utf8");
                $requete = "SELECT `id`,`pourcentage` FROM `stokage` WHERE `id`=14 ";
                $resultat = $mysqli->query($requete);


                while ($ligne = $resultat->fetch_assoc()) {
                        echo $ligne['pourcentage'];
                        $pourcentage2 = $ligne['pourcentage'];

                }
                $mysqli->close();

?>">
                        <div class="progress-masque">
                           <div class="progress-barre"></div>
                           <div class="progress-sup50"></div>
                        </div>
                     </div>
                     <td align="center"> <h3>
                        
               <?php

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
                $mysqli->set_charset("utf8");
                $requete = "SELECT `id`,`date` FROM `stokage` WHERE `id`=15 ";
                $resultat = $mysqli->query($requete);


                while ($ligne = $resultat->fetch_assoc()) {
                        echo $ligne['date'] . '' . $ligne['heure'] . '' . $ligne['frequence'] .  $ligne['pourcentage'] . '<br>';
                }
                $mysqli->close();

?>
</h3></td>
                     <td align="center"> <h3>1 semaines</h3> </td>
                     <td align = center> <h3> <?php
                  if ($pourcentage2>= 50 && $pourcentage2 <= 79) {
                     echo '<span style="color: yellow;">Le conteneur 2 peut-être ramasser</span>';
                  }
                  if ($pourcentage2>= 80) {
                     echo '<span style="color: #d34c4c;">Le conteneur 2 doit être ramasser</span>';
                  }
                  if ($pourcentage2< 50) {
                     echo '<span style="color: #00CC00">Le conteneur 2 peut-être ramasser</span>';
                     
                  }
                  ?>
                  </td>
                  </td>
               </tr>

               <tr>
                  <br> <td align="center"> <img src="poubelle.png" alt="" style="width: 200" height="200" > 
                     <td align="center">  <div align="center" class="progress-circle thin" data-value="<?php

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
                $mysqli->set_charset("utf8");
                $requete = "SELECT `id`,`pourcentage` FROM `stokage` WHERE `id`=15 ";
                $resultat = $mysqli->query($requete);


                while ($ligne = $resultat->fetch_assoc()) {
                        echo $ligne['pourcentage'];
                        $pourcentage3 = $ligne['pourcentage'];

                }
                $mysqli->close();

?>">
                        <div class="progress-masque">
                           <div class="progress-barre"></div>
                           <div class="progress-sup50"></div>
                        </div>
                     </div>
                     <td align="center"> <h3><?php

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
                $mysqli->set_charset("utf8");
                $requete = "SELECT `id`,`date` FROM `stokage` WHERE `id`=15 ";
                $resultat = $mysqli->query($requete);


                while ($ligne = $resultat->fetch_assoc()) {
                        echo $ligne['pourcentage']. $ligne['date'] . '' . $ligne['heure'] . '' . $ligne['frequence'] .  '<br>';
                }
                $mysqli->close();

?>
</h3></td>
                     <td align="center"> <h3>3 semaines</h3> </td>
                     <td align = center> <h3> <?php
                  if ($pourcentage3>= 50 && $pourcentage3 <= 79) {
                     echo '<span style="color: yellow;">Le conteneur 3 peut-être ramasser</span>';;
                  }
                  if ($pourcentage3>= 80) {
                     echo '<span style="color: #d34c4c;">Le conteneur 3 doit être ramasser</span>';
                  }
                  if ($pourcentage3< 50) {
                     echo '<span style="color: #00CC00">Le conteneur 3 peut-être ramasser</span>';
                     
                  }
                  ?>
                  </td>
                  </td>
               </tr> 
            
            </table>










<br>
<br>
            
             <table>

               <tr>
                  <td align="center"><h3> Site 2 </h3></td>
                  <td align="center"><h3> Taux de remplissage </h3></td>
                  <td align="center"><h3> Dernier ramassage </h3></td>
                  <td align="center"><h3> Fréquence de remplissage </h3></td>
                  <td align="center"><h3> Adresse : Rue Louis-Pasteur, 84000 Avignon </h3></td>
                  <td align= "center"> <h3>Ramassage</h3></td>

               </tr>

               <tr>
                  <td align="center"> <img src="poubelle.png" alt="" style="width: 200" height="200" > 
                 <td align="center"> <div align="center" class="progress-circle thin" data-value="89">
                     <div class="progress-masque">
                        <div class="progress-barre"></div>
                        <div class="progress-sup50"></div>
                     </div>
                  </div>
		  <td align="center"> <h3> 
<?php

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
                $mysqli->set_charset("utf8");
                $requete = "SELECT `id`,`date` FROM `stokage` WHERE `id`=1 ";
                $resultat = $mysqli->query($requete);


                while ($ligne = $resultat->fetch_assoc()) {
                        echo $ligne['date'] . '' . $ligne['heure'] . '' . $ligne['frequence'] .  '<br>';
                }
                $mysqli->close();

?>

</h3></td>
                  <td align="center"> <h3>2 semaines</h3></td>
                  <td rowspan="3"><iframe src="https://www.google.com/maps/d/embed?mid=184bI34FmxzAKOGqmr-6IKsd-dlDlRNM&ehbc=2E312F"  width="700vw" height="650vw"></iframe></iframe></td>
                     <td align = center> <h3> <span style="color: #d34c4c">Le conteneur 1 doit être ramasser</span>
                  </td>
                  </td>
               
               </tr>
               
               <tr>
                  <br> <td align="center"> <img src="poubelle.png" alt="" style="width: 200" height="200" > 
                     <td align="center">  <div align="center" class="progress-circle thin" data-value="54">
                        <div class="progress-masque">
                           <div class="progress-barre"></div>
                           <div class="progress-sup50"></div>
                        </div>
                     </div>
                     <td align="center"> <h3>
                        
               <?php

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
                $mysqli->set_charset("utf8");
                $requete = "SELECT `id`,`date` FROM `stokage` WHERE `id`=2 ";
                $resultat = $mysqli->query($requete);


                while ($ligne = $resultat->fetch_assoc()) {
                        echo $ligne['date'] . '' . $ligne['heure'] . '' . $ligne['frequence'] .  $ligne['pourcentage'] . '<br>';
                }
                $mysqli->close();

?>
</h3></td>
                     <td align="center"> <h3>1 semaines</h3> </td>
                     <td align = center> <h3> <span style="color: yellow">Le conteneur 2 doit bientôt être ramasser</span>
                  </td>
                  </td>
               </tr>

               <tr>
                  <br> <td align="center"> <img src="poubelle.png" alt="" style="width: 200" height="200" > 
                     <td align="center">  <div align="center" class="progress-circle thin" data-value="49">
                        <div class="progress-masque">
                           <div class="progress-barre"></div>
                           <div class="progress-sup50"></div>
                        </div>
                     </div>
                     <td align="center"> <h3><?php

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
                $mysqli->set_charset("utf8");
                $requete = "SELECT `id`,`date` FROM `stokage` WHERE `id`=3 ";
                $resultat = $mysqli->query($requete);


                while ($ligne = $resultat->fetch_assoc()) {
                        echo $ligne['pourcentage']. $ligne['date'] . '' . $ligne['heure'] . '' . $ligne['frequence'] .  '<br>';
                }
                $mysqli->close();

?>
</h3></td>
                     <td align="center"> <h3>3 semaines</h3> </td>
                     <td align = center> <h3><span style="color: #00CC00">Le conteneur 3 peut-être ramasser</span> </h3>

                  </td>
                  </td>
               </tr>
            
            </table>




















            <table>

<tr>
   <td align="center"><h3> Site 3 </h3></td>
   <td align="center"><h3> Taux de remplissage </h3></td>
   <td align="center"><h3> Dernier ramassage </h3></td>
   <td align="center"><h3> Fréquence de remplissage </h3></td>
   <td align="center"><h3> Adresse : <?php

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
 $mysqli->set_charset("utf8");
 $requete = "SELECT `id_site`,`Adresse` FROM `Site` WHERE `id_site`=4 ";
 $resultat = $mysqli->query($requete);


 while ($ligne = $resultat->fetch_assoc()) {
         echo $ligne['Adresse'];
 }
 $mysqli->close();

?>  
 <td align= "center"> <h3>Ramassage</h3></td>


</h3></td>

</tr>

<tr>
   <td align="center"> <img src="poubelle.png" alt="" style="width: 200" height="200" > 
  <td align="center"> <div align="center" class="progress-circle thin" data-value="<?php

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
 $mysqli->set_charset("utf8");
 $requete = "SELECT `id`,`pourcentage` FROM `stokage` WHERE `id`=1 ";
 $resultat = $mysqli->query($requete);


 while ($ligne = $resultat->fetch_assoc()) {
         echo $ligne['pourcentage'];
 }
 $mysqli->close();

?>">
      <div class="progress-masque">
         <div class="progress-barre"></div>
         <div class="progress-sup50"></div>
      </div>
   </div>
<td align="center"> <h3> 
<?php

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
 $mysqli->set_charset("utf8");
 $requete = "SELECT `id`,`date` FROM `stokage` WHERE `id`=1 ";
 $resultat = $mysqli->query($requete);


 while ($ligne = $resultat->fetch_assoc()) {
         echo $ligne['date'] . '' . $ligne['heure'] . '' . $ligne['frequence'] .  '<br>';
 }
 $mysqli->close();

?>

</h3></td>
   <td align="center"> <h3>2 semaines</h3></td>
   <td rowspan="3"><iframe src="https://www.google.com/maps/d/embed?mid=1a_IfkvlcD117NNpIqbSaqxzCKAxLqk4&ehbc=2E312F" width="700vw" height="650vw"></iframe></td>
      <td align = center> <h3> <span style="color: yellow">Le conteneur 1 doit bientôt être ramasser</span> </h3>
   </td>
   </td>

</tr>

<tr>
   <br> <td align="center"> <img src="poubelle.png" alt="" style="width: 200" height="200" > 
      <td align="center">  <div align="center" class="progress-circle thin" data-value="<?php

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
 $mysqli->set_charset("utf8");
 $requete = "SELECT `id`,`pourcentage` FROM `stokage` WHERE `id`=2 ";
 $resultat = $mysqli->query($requete);


 while ($ligne = $resultat->fetch_assoc()) {
         echo $ligne['pourcentage'];
 }
 $mysqli->close();

?>">
         <div class="progress-masque">
            <div class="progress-barre"></div>
            <div class="progress-sup50"></div>
         </div>
      </div>
      <td align="center"> <h3>
         
<?php

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
 $mysqli->set_charset("utf8");
 $requete = "SELECT `id`,`date` FROM `stokage` WHERE `id`=2 ";
 $resultat = $mysqli->query($requete);


 while ($ligne = $resultat->fetch_assoc()) {
         echo $ligne['date'] . '' . $ligne['heure'] . '' . $ligne['frequence'] .  $ligne['pourcentage'] . '<br>';
 }
 $mysqli->close();

?>
</h3></td>
      <td align="center"> <h3>1 semaines</h3> </td>
      <td align = center> <h3> <span style="color: yellow">Le conteneur 2 doit bientôt être ramasser</span> </h3>
   </td>
   </td>
   
</tr>

<tr>
   <br> <td align="center"> <img src="poubelle.png" alt="" style="width: 200" height="200" > 
      <td align="center">  <div align="center" class="progress-circle thin" data-value="<?php

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
 $mysqli->set_charset("utf8");
 $requete = "SELECT `id`,`pourcentage` FROM `stokage` WHERE `id`=3 ";
 $resultat = $mysqli->query($requete);


 while ($ligne = $resultat->fetch_assoc()) {
         echo $ligne['pourcentage'];
 }
 $mysqli->close();

?>">
         <div class="progress-masque">
            <div class="progress-barre"></div>
            <div class="progress-sup50"></div>
         </div>
      </div>
      <td align="center"> <h3><?php

$mysqli = new mysqli("localhost", "project", "password", "poubelle");
 $mysqli->set_charset("utf8");
 $requete = "SELECT `id`,`date` FROM `stokage` WHERE `id`=3 ";
 $resultat = $mysqli->query($requete);


 while ($ligne = $resultat->fetch_assoc()) {
         echo $ligne['pourcentage']. $ligne['date'] . '' . $ligne['heure'] . '' . $ligne['frequence'] .  '<br>';
 }
 $mysqli->close();

?>
</h3></td>
      <td align="center"> <h3>3 semaines</h3> </td>
      <td align = center> <h3><span style="color: #00CC00">Le conteneur 3 peut-être ramasser</span> </h3>
   </td>
   </td>
</tr>


</table>
      </header>
    

<form>
        <input type="button" value="← revenir à l'accueil "onclick="document.location.href='http://localhost/index.php'";>
</form>

</body>
</html>