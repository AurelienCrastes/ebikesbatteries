<!DOCTYPE htlm>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Batteries pour vélos électriques</title>
</head>
<body>
	<?php include("menus.php"); ?>
		<div id="contenu"> <div id="argumentaire"><br>Nous vendons des batteries neuves pour vélos électriques avec
		moteur pédalier <b>PANASONIC</b> ou <b>BOSCH</b>. Elles se substituent en tous points à la batterie d'origine et se rechargent
		avec le chargeur livré avec le vélo.<br> Au départ simples utilisateurs de ces batteries, nous avons décidé de les importer de Chine pour les proposer à un plus large public.  
		Les prix que nous proposons sont très abordables, très inférieurs à ceux de la batterie d'origine pour des performances équivalentes ou supérieures, pour l'autonomie notamment. 
		<br><br>Pour vélos Gitanes, Flyer, Kalkhoff, Raleigh, Moustache, et de nombreuses autres marques de VAE.<br>
		<b>En cas de doutes sur la compatibilité nous vous suggérons de nous envoyer une ou deux photos numériques
		de votre batterie actuelle et de la partie de votre vélo recevant la batterie à l'adresse mail
		serviceclient@ebikesbatteries.fr .</b> Nous avons 5 modèles dans notre gamme, cliquez sur la photo correspondante à
		la batterie de votre choix pour plus de détails:<p></div>

		
		<table>
		<?php
		include("functions.php");
		$reponse = connection("");
		afficherTableauProduits($reponse); ?>
		</table>
	</div>
	<?php include("menubas.php"); ?>
</body>
</html>
