<?php 
	require("RumpleQuery.php");
	$rmQuery = new RumpleQuery();
    $old_date = null;
    $old_user = "";
    if(isset($_GET['id'])){
        $edit_id = $rmQuery->select('operations',["*"],'id',$_GET['id']);	foreach($edit_id as $edit){ ?>
    <div class="containe-fluid" style="margin-left: 25%; margin-top: 10%; width: 50%;">
	<div class="row mt-2">
		<div class="col-lg">
			<div class="card offset-2 bg-dark">
				<div class="card-body text-white">
					<h4><b>Modification</b></h4>
					<hr>
			<form action="" method="post">
            <div class="form-group">
			  <input type="text" class="form-control" name="designation" placeholder="Désignation de l'article" value="<?php echo $edit['designation']; ?>" required />          
			</div>
			<div class="form-group">
			  <input type="number" class="form-control" name="cout" value=<?php echo $edit['cout']; ?> placeholder="Entrez le prix de l'article" required />
			</div>
			<div class="form-group">
			  <input type="number" class="form-control" name="quantite" value=<?php echo $edit['quantite']; ?> placeholder="Qunatité" required />
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
				</div>
			</div>
		</div>
	</div>
</div>
    <?php
    $old_tdate = $edit['date'];
    $old_user = $edit['nom_user'];
}} ?>
<?php 

        if(isset($_POST['submit'])){
            $designation = $_POST['designation'];
            $prix = $_POST['cout'];
            $quantite = $_POST['quantite'];
            $action = $_POST['flexRadioDefault'];
            $date = $lastdate;
            $last_user = 
            $rmQuery->update("operations",["designation","cout","date","quantite","action","nom_user"],[$designation,$prix,$date, $quantite,$action,$old_user],'id',$_GET['id']);

        }
?>



