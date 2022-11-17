<div class="containe-fluid" style="margin-left: 25%; margin-top: 10%; width: 50%;">
	<div class="row mt-2">
		<div class="col-lg">
			<div class="card offset-2 bg-dark">
				<div class="card-body text-white">
					<h4><b>Entrée & Sortie</b></h4>
					<hr>
			<form action="" method="post">
            <div class="form-group">
			  <input type="text" class="form-control" name="designation" placeholder="Désignation de l'article" required />          
			</div>
			<div class="form-group">
			  <input type="number" class="form-control" name="prix" placeholder="Entrez le prix de l'article" required />
			</div>
			<div class="form-group">
			  <input type="number" class="form-control" name="quantite" placeholder="Qunatité" required />
				</div>
				<div class="row">
				<div class="form-check m-2">
				<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="depense">
				<label class="form-check-label" for="flexRadioDefault1">
					Dépense
 				</label>
			</div>
			<div class="form-check m-2">
  			<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="recette" checked>
  			<label class="form-check-label" for="flexRadioDefault2">
   				Recette
  			</label>
			</div>
				</div>
          	<button type="submit" name="submit" class="btn btn-primary">Valider</button>
        			</form>
					<?php
	require("RumpleQuery.php");
	$rmQuery = new RumpleQuery();
	//var_dump($_SESSION('user'));
	$current_user = $_COOKIE['ieUser'];

	if(isset($_POST['submit'])){
		$designation = $_POST['designation'];
		$prixU = $_POST['prix'];
		$quantite = $_POST['quantite'];
		$action = $_POST['flexRadioDefault'];
		$date = date("Y-m-d H:i:s");
		$montant = $quantite*$prixU;
	$rmQuery->insert("operations",["designation","prixU","date","quantite","montant","action","nom_user"],[$designation,$prixU,$date, $quantite,$montant,$action,$current_user]);
	}
?>
				</div>
			</div>
		</div>
	</div>
</div>