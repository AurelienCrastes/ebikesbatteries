<!DOCTYPE htlm>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="../../../../js-global/FancyZoom.js" type="text/javascript"></script>
<script src="../../../../js-global/FancyZoomHTML.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="script.js">
</script>
<title>Batteries pour vélos électriques</title>
</head>
<body>
	<?php include("menus.php");
	if (!isset($_GET['id'])) {
		echo 'Identifiant produit non renseigné';
	} else { ?>
	<div id="contenu"> 
		<?php include("functions.php");
		$reponse = connection('WHERE id='.$_GET['id'].'');
		$donnees = $reponse ->fetch();?>
		<img id="PAN01big" src="<?php echo $donnees['photo_grande_01'];?>">
		<div id='affichageImage'></div>
		<div id="description"><h2>Type <?php echo $donnees['marque'];?> <?php echo $donnees['volt'];?>V <?php echo $donnees['capacite'];?>Ah
		<?php if ($donnees['disponibilite'] == 0) { ?>
		<FONT color="red"><p>RUPTURE DE STOCK</p></FONT>			
		<?php } ?>
		<p>Prix : <?php echo $donnees['prix'];?>€ TTC</p></h2><p>Frais de port : 15€</p>
		<?php if ($donnees['position'] != null) { ?>
			<p>Position: <?php echo ' '.$donnees['position'];  ?></p><?php } ?><p>Voltage: <?php echo $donnees['volt'];?>V</p>
		<p>Capacité: <?php echo $donnees['capacite'];?>Ah</p><p>Soit <?php echo $donnees['puissance'];?>Wh</p>
		<p>Poids: <?php echo $donnees['poids'];?>Kg</p><p>Taille: <?php echo $donnees['taille'];?></p><p>Marque des cellules: Samsung</p>
		<p>Température de stockage: -20~+40 °C</p><p>Température de charge: 0~+45°C</p><p>Température d'utilisation: -20~+60°C</p>
		<?php if ($donnees['disponibilite'] == 1) { ?>
		//bouton de paiement paypal
			<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="<?php echo $donnees['paypal_value'];?>">
				<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
				<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
			</form>
		<?php } ?>
		</div>
		<div id="choixphoto"><ul><li><a href="#" id="<?php echo $donnees['photo_grande_01'];?>" onclick="afficherImage(this.id)"><img class="img01" src="<?php echo $donnees['photo_petite_01'];?>"></a></li>
			<li><a href="#" id="<?php echo $donnees['photo_grande_02'];?>" onclick="afficherImage(this.id)"><img class="img01" src="<?php echo $donnees['photo_petite_02'];?>"></a></li>
			<li><a href="#" id="<?php echo $donnees['photo_grande_03'];?>" onclick="afficherImage(this.id)"><img class="img01" src="<?php echo $donnees['photo_petite_03'];?>"></a></li>
			<li><a href="#" id="<?php echo $donnees['photo_grande_04'];?>" onclick="afficherImage(this.id)"><img class="img01" src="<?php echo $donnees['photo_petite_04'];?>"></a></li>
			<li><a href="#" id="<?php echo $donnees['photo_grande_05'];?>" onclick="afficherImage(this.id)"><img class="img01" src="<?php echo $donnees['photo_petite_05'];?>"></a></li>
			</ul>
		</div>
		<div id="tipclic">  Cliquez sur les photos pour les agrandir</div>
	</div>
	<?php include("menubas.php"); } ?>
</body>
</html>