<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../public/css/Produit.css" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<title>Produits</title>
	</head>
	<body>
	<?php include('navbar.php'); ?>
		<div class="container ligneProduit">
			<h1 class="titreProduits">Nos produits</h1><br>
      <div class="row g-3">
        <div class="col-4"><div class="element"><img src="../public/assets/bouteille.jpg" width="200" height="200"> <p>Nom du vin</p><p>900euro</p><input type="button" value="Ajouter au panier" class="bouttonPanier"></div></div>
        <div class="col-4"><div class="element"><img src="../public/assets/bouteille_2.jpg" width="200" height="200"> <p>Nom du vin</p><p>900euro</p><input type="button" value="Ajouter au panier" class="bouttonPanier"></div></div>
        <div class="col-4"><div class="element"><img src="../public/assets/bouteille_4.jpg" width="200" height="200"> <p>Nom du vin</p><p>900euro</p><input type="button" value="Ajouter au panier" class="bouttonPanier"></div></div>
		</div>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"
		></script>
	</body>
</html>
