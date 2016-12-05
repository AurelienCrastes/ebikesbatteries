<!DOCTYPE htlm>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Batteries pour vélos électriques</title>
</head>
<body>
	<?php include("menus.php"); ?>
		<div id="contenu"> <div id="argumentaire">Nos batteries de type Bosch sont compatibles avec les vélos adaptés à la gamme Classic et Classic+ équipés de 
		moteur pédalier Bosch.<p> Ces batteries remplaceront
		les batteries d'origine sans aucune perte de puissance.<br> Elles
		sont composées de cellules Lithium-ion de marque Samsung. Elles sont pleinement compatibles avec le chargeur d'origine fourni à l'achat de votre vélo.</div>
	<table>
		<?php
		include("functions.php");
		$reponse = connection('WHERE marque="Bosch"');
		afficherTableauProduits($reponse); ?>
		</table>
	</div>
	<?php include("menubas.php"); ?>
</body>
</html>