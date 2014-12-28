<html>
	<head>
	<title>
	Laboratoire Galaxy Swiss Bourdin
	</title>
	<?php include("hautConnecteComptable.php");?>
<div id="corps2">
<center>

<h2>Système Informatique</h2>
<p align="center"><img src="images/ReseauGSB.png"></p>
</br>
<p>Principales fonctions des serveurs : DHCP, DNS, Annuaire et gestion centralisée des environnements, Intranet, Messagerie, Agenda partagé.
</p>
<p>Les applications métiers : Base d’information pharmaceutique, Serveur dédiées à la recherche, Base de données, Progiciel de Gestion intégré.
</p>



<h2>Organisation du réseaux avec ces différents services</h2>
<p align="center"><img src="images/Organisation.png"></p>
</br>
<p>Le système informatique de l’entreprise sur le site de Paris est composé de tous les services administratifs, d’un service labo-recherche, d’un service juridique et d’un service communication.
</p>
<p>Les serveurs sont installés dans une salle sécurisée située au 6ème étage du bâtiment. Seules les personnes équipées d’une clé de sécurité ou d’un badge auront accès à cette salle.
</p>


<h2>Segmentation</h2>
</br>

<table WIDTH="80%" CELLSPACING="3" BORDER="3" CELLPADDING="3">
<tr><td>N°VLAN</td><td>Service</td><td>Adressage IP</td></tr>
<tr><td>10</td><td>Réseau & Système</td><td>192.168.10.0/24</td></tr>
<tr><td>20</td><td>Direction / DSI</td><td>192.168.20.0/24</td></tr>
<tr><td>30</td><td>RH / Compta / Juridique / Secrétariat Administratif</td><td>192.168.30.0/24</td></tr>
<tr><td>40</td><td>Communication / Rédaction</td><td>192.168.40.0/24</td></tr>
<tr><td>50</td><td>Développement</td><td>192.168.50.0/24</td></tr>
<tr><td>60</td><td>Commercial</td><td>192.168.60.0/24</td></tr>
<tr><td>70</td><td>Labo-Recherche</td><td>192.168.70.0/24</td></tr>
<tr><td>100</td><td>Accueil</td><td>192.168.100.0/24</td></tr>
<tr><td>150</td><td>Visiteurs</td><td>192.168.150.0/24</td></tr>
<tr><td>200</td><td>Démonstration</td><td>192.168.200.0/24</td></tr>
<tr><td>300</td><td>Serveurs</td><td>172.16.0.0/24</td></tr>
<tr><td>400</td><td>Sortie</td><td>172.18.0.0/30</td></tr>
</table>
</center>
	

<p>Les règles actuelles concernant les vlans sont les suivantes :
</p>
<ul>
<li>Chaque vlan sauf le vlan visiteur peut uniquement accéder, quel que soit le protocole aux vlans "Serveurs" et "Sortie".</li>
<li>Le vlan "Visiteurs" peut uniquement accéder aux serveur dns et dhcp et  sortir sur internet.</li>
<li>L'adresse IP de chaque vlan est la première adresse immédiatement disponible du réseau.</li>
</ul>

<center>
	<h2>Les Equipements</h2>
</br>
<p>Les équipements informatiques sont fortement répandus sur le site,   puisque chaque employé est équipé d’un poste fixe relié au réseau, ces équipements correspondent à plus de 350 terminaux. De plus l’entreprise compte un certain nombre de station de travail plus adapté à la partie labo recherche, des PC portables pour les différents services en ayant l’utilité.
</p>
<p>Pour les visiteurs médicaux deux situation sont possibles soit ils reçoivent une indemnité bisannuelle pour s'équiper en informatique (politique Swiss-Bourdin) soit une dotation en équipement (politique Galaxy). 
</p>
<p>L’entreprise est équipée de la fibre optique pour relier les différents services, d’une multitude de serveur, d’un commutateur MUTLAB, d’un routeur. Chaque salle de réunion dispose d'un vidéoprojecteur, d'enceintes et d'un tableau numérique interactif. Plusieurs points d’accès wifi sont disponible au sein de l’entreprise.
</p>
</center>
</div>
	</body>
</html>
</div>
	</body>
</html>