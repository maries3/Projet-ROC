<!doctype html>
<html lang="fr">
<head>
        <meta charset="utf-8">
        <title>Mini-Project ROC</title>
<style>

body
{
	background-color:#6699ff;
}


h1,h2{
        text-align:center;
        color: #FFFFFF;
}

h1, h2{
        color: black;
        padding 3px;
        text-decoration:underline;
}

.monMenu
{
        padding:0;
        display:flex;
        text-align:center;
        color:black;
}

.monMenu a
{
        display: block;
        min-width: 85px; 
        text-decoration: none;
        color: black;
}
.monMenu li {
        list-style-type:none;
}
nav ul {
        list-style-type:none;
}
nav a{
        display: block;
        text-decoration: none;
        color:black;
        border-bottom: 2px solid transparent;
        padding: 10px 0px;
} 

nav a{
        display: block;
        text-decoration: none;
        color:black;
        border-bottom: 2px solid transparent;
        padding: 10px 0px;
} 

nav ul li {
        float: left;
        width: 25%;
        text-align: center;
        position:relative;
}

form {
padding:50px;
width:500px;
}

label{
	line-height:1em;
}


input[type= submit], input[type=reset]
{
	max-width:500px;
	margin-left:10px;
	box-shadow:1px 1px 1px #D83F3D;
	cursor:pointer;

}

input[type="text"] {
height: auto;
width: auto;
}

.form{
	margin:10px;
}

form div {
width: 100%;
display: flex;
flex-direction: column;
min-height: 80px;
margin-top: 20px;
}
form div > label {
margin-bottom: 5px;
font-weight: 500;
}
form div > input, form div > select {
height: 50px;
padding-left: 10px;
}

form div > select {
appearance: none;
}


form div > input::placeholder, form div > textarea::placeholder {
color:white;
}

form {
margin: auto;
display: block;

}

img {
margin: auto;
display: block;
width: 100%;
min-width: 600px;
}

label{
font-size:25px;
}

</style>
</head>
<body>

	<h1>ROC<h1>
	
	<h2>Ajouter des poubelles</h2>
	
<br>
<nav>

<ul>	
<div id="menu">
        <ul class="monMenu">

                <li><a href="http://localhost/index.php">Accueil</a>
                <li><a href="http://localhost/index2.php">Historique</a>
                <li><a href="">Contact</a>

	
	</ul>
</div>
</nav>

<form action="merci.php" method="post">
<div class="form">	
	<label for="color">Nombre de poubelle :</label>
	
<select name="NombrePoubelle" id="couleur" required >
	<option value="">Choisir le nombre de poubelle</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="autre">autre</option>

</form>	

</select>	


<form action="merci.php" method="post">
	<h4>Nombre de poubelle bleu </h4>
	
<select name="NombreBleu" id="couleur">
        <option value="">0</option>
	<option value="">1</option>
	<option value="bleu">2</option>
	<option value="vert">3</option>
	<option value="jaune">4</option>
	<option value="autre">Autre</option>


</select>

<form action="merci.php" method="post">
	<h4> Nombre de poubelle Jaune </h4>
	
<select name="NombreJaune" id="couleur">
        <option value="">0</option>
	<option value="">1</option>
	<option value="bleu">2</option>
	<option value="vert">3</option>
	<option value="jaune">4</option>
	<option value="autre">Autre</option>


</select>

<form action="merci.php" method="post">
	<h4>Nombre de poubelle Verte </h4>
	
<select name="NombreVerte" id="couleur">
        <option value="">0</option>
        <option value="">1</option>
	<option value="bleu">2</option>
	<option value="vert">3</option>
	<option value="jaune">4</option>
	<option value="autre">Autre</option>


</select>

<form action="merci.php" method="post">
	<h4>Nombre de poubelle Rouge </h4>
	
<select name="NombreRouge" id="couleur">
        <option value="">0</option>
	<option value="">1</option>
	<option value="bleu">2</option>
	<option value="vert">3</option>
	<option value="jaune">4</option>
	<option value="autre">Autre</option>


</select>

      


<form action="merci.php" method="post">

<div class="form">

<label for="adresse" >Saisir l'adresse: </label>

<textarea id ="adresse" name="Adresse" rows="5" cols="33"required>
</textarea>

<form>
<button type ="submit" name ="submit" style="height: 35px">Envoyer</button>
</form>

</div>
<img src="poubelle2.jpg"/>

<form>
<input type="button" value=" revenir à l'accueil←" style="height:35px"  onclick="document.location.href='http://localhost/index.php'";>
</form>


</body>
</html>
