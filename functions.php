<?php
	function connection($request){ 
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=ebikesbatteries;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
		$reponse = $bdd->query('SELECT * FROM batterie '.$request);
		return $reponse; 
	}
	
	function afficherTableauProduits($reponse) {
		$tdCounter = 0;
		while ($donnees = $reponse ->fetch())
		{
			if($tdCounter%3 ==0) { ?>
				<tr>
			<?php } ?>
			<td>
			<a href="fiche.php?id=<?php echo $donnees['id']; ?>">
				<img class="photosBatteries" src= <?php echo $donnees['photo'];?>></a>
				<?php echo $donnees['marque'].' ';
				if ($donnees['type'] != null) {
					echo $donnees['type'].' '; 
				}
				echo $donnees['volt'];?>V <?php echo $donnees['capacite'];?>Ah
				<?php if ($donnees['position'] != null) {
				echo ' '.$donnees['position']; } ?>
			</td>
			<?php if($tdCounter%3 ==2) { ?></tr>
		<?php } $tdCounter++;} 
	}
?>