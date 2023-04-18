<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Mini-Project ROC</title>
	<script src=bande_défilante.js></script>
<style>
	

body
{
    
	background: linear-gradient( rgba(65,55,244,1) 0%, rgba(82,82,245,1) 32%, rgba(33,102,231,1) 85%, rgba(17,155,243,1) 100%, rgba(0,212,255,1) 100%);

background-repeat:repeat;
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

div#image{
word-spacing:200px;
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
.sous
{
	display: none;	
	box-shadow; 0px 1px 2px #CCC;
	background-color :white;
	position:absolute;
	width: 100%;
	z-index:1000;
}
nav> ul li:hover .sous{
	display: block;
}
.sous li {
	float: none;
	width: 100%;
	text-align:left;	
}
.sous a {
	padding: 10px;
	border-bottom:none;
}
.sous a ::hover{
	border-bottom:none;
	background-color: RGBa(200,200,200,0.1);
}

nav ul::after{
	content: "";
	display:table;
	clear: both;
}

nav a :hover{
	color: orange;
	border-bottom:2px solid gold;
}

nav ul li {
	float: left;
	width: 25%;
	text-align: center;
	position:relative;
}

.menuGlisser >a::after{
	content:"⬇";
	font-size:15px;
}

</style>
</head>
<body high=100% width=100%>
		<h1>Ramassage Optimisé et Connecté</h1>
		
<br>
<nav>
<ul>


	<div id="menu">
	<ul class="monMenu">    
        
        	<li><a href="">Accueil</a>
        	<li><a href="">Historique</a>
        	<li><a href="">Contact</a>


</ul>
</div>
</nav>

<hr>
<nav>

<div class="image">


</nav>

<table { border : 1px solid dark; } align="center">

    <tr>
    <td align="center" colspan="2"> <h2>Présentation du projet ROC</h2></td>
	</tr>

	<tr>
    <td align="center"style="background-color:white"><h2> Qu'est-ce que le projet ROC ?</h2>
		<br>Le projet ROC est un système de relever informatique qui permet de savoir la contenance, 
		<br>la localisation et la fréquence de remplissage de site de poubelle.
		<br><br>Il s’agit de réaliser un système ROC (Ramassage Optimisé et Connecté). 
		<br><br>Grâce aux conteneurs semi-enterrés ainsi que des capteurs à ultra-sons, se système permet une simplification de la collecte
		<br> des déchets et une meilleur synchonysation des tournées de collecte.</td>
		<td><img src="index.jpg" alt="" style="width:100%" height="100%" > </td>

    
    </tr>

	</table>
  
    <form>
    
    <input type="button" value="✚  Ajouter un site"onclick="document.location.href='http://localhost/site.php'";>
    
    <input type="button" value="➩ Site exitants"onclick="document.location.href='http://localhost/index2.php'";>
    </form>
<?php

?>
        
    </body>
    </html>