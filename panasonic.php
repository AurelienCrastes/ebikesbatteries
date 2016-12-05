<!DOCTYPE htlm>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Batteries pour vélos électriques</title>
</head>
<body>
	<?php include("menus.php"); ?>
		<div id="contenu"> <div id="argumentaire">Nos batteries sont compatibles avec de nombreuses marques de vélos équipés de moteur pédalier,
		parmi lesquelles Kalkhoff Agattu, Gitane Nocar, Peugeot E-bike, Bh Bike, Helkama, Flyer...<p> Ces batteries remplaceront les batteries d'origine sans aucune perte de puissance,
		avec un gain d'autonomie conséquent suivant le modèle pour lequel vous opterez.<br> Elles sont composées de cellules Lithium-ion de marque Samsung. Elles sont pleinement 
		compatibles avec le chargeur d'origine fourni à l'achat de votre vélo. </div>
	    <table>
		<?php
		include("functions.php");
		$reponse = connection('WHERE marque="Panasonic" OR marque="Impulse"');
		afficherTableauProduits($reponse); ?>
		</table>
	</div>
	<?php include("menubas.php"); ?>
</body>
</html>