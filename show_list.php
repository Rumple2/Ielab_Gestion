<?php
  require("RumpleQuery.php");
  $rmQuery = new RumpleQuery();
  $operationsR = $rmQuery->select("operations",["*"],"action","recette");
  $operationsD = $rmQuery->select("operations",["*"],"action","depense");
  
?>
<style>
	.user_list{
		height: auto;
    width: 75%;
    margin-left: 20%;
    margin-top: 10px;
    padding: 10px;
    border-radius: 10px;	
    box-shadow: 8px 8px 8px 8px grey;
	}
  .user_list button{
    color: black;
    background-color: black;
  
  }
	th{
		
	}
    td{
      padding: 10px;
      margin: 0;
      border: 1px solid black;
    border-radius: 8px;
    }
    tr{
      border: 1px solid black;
      border-radius: 8px;
    }
    tr:hover{
      padding: 20px;
      background-color: grey;
      color: white;
    }
    table{
      width: 100%;
      color: black;
      border-radius: 8px;
    }
    h2{
      color: black;
    }

  </style>
<div class="panel_total bg-dark" style="position: fixed; 
    height: 150px; 
    margin-top: 1.5%; border-radius: 8px;
    padding:10px; background-image: url('assets/img/mur_1.jpg');   
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; ">

<div class="p-12">
 <span><?php 
      $query = "SELECT SUM(montant) FROM operations";
      $sum = 0;
    ?>
    <?php 
       $query = "SELECT SUM(montant) FROM operations WHERE action='depense' ";
       $sumDepense = $rmQuery->query($query);
      foreach ($sumDepense as $depense){
        $sum = $depense[0];
    ?>
    <br/>
    <span style="color: white;">Dépense total: <?php echo $depense[0]; ?></span>
    <?php } ?>
        <br/>
    <?php 
       $query = "SELECT SUM(montant) FROM operations WHERE action='recette' ";
       $sumRecette = $rmQuery->query($query);
      foreach ($sumRecette as $recette){
        $sum = $sum - $recette[0];
    ?>
    <span style="color: white;">Recette total: <?php echo $recette[0]; ?></span>
    <?php } ?>
    <br />
    <span style="color: white;">Reste : <?php echo $sum; ?> fcfa</span>
    
    

</div>

</div>
<div class="user_list" >

<div class="d-flex justify-content-center buttons-wrapper my-3">
  <button onclick="location.href ='export_excel.php';" class="btn btn-rounded text-white blue  btn-sm add-bubble-edit" type="button">
    <i class="far fa-file-excel"></i></button>
  <button onclick="location.href = 'print_page.php';" class=" btn btn-rounded text-white purple m-2 lighten-2 btn-sm addNewRow" type="button"><i class="fas fa-print"></i></button>
  <button class="btn btn-rounded text-white red btn-sm m-2 removeFirstTr" type="button"><i class="fas fa-eraser"></i></button>    
</div>

<table id="" class="">
  <thead class="bg-dark p-2">
  <h2>Recette</h2>
    <tr>
      <th>id</th>
      <th>Désignation</th>
      <th>Prix unitaire</th>
      <th>Quantité</th>
      <th>Montant</th>
      <th>Date</th>
      <th>Action</th>
      <th>Users</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     
      foreach($operationsR as $operation){   ?> 
    <tr>
      <td><?php echo($operation['id']); ?> </td>
      <td><?php echo($operation['designation']); ?> </td>
      <td><?php echo($operation['prixU']); ?> </td>
      <td><?php echo($operation['quantite']); ?> </td>
      <td><?php echo($operation['montant']); ?> </td>
      <td><?php echo($operation['date']); ?> </td>
      <td><?php echo($operation['action']); ?> </td>
      <td><?php echo($operation['nom_user']); ?> </td>
      <td><a href="index.php?page=edit&id=<?php echo $operation['id']; ?>"><i class="fa fa-edit"></i></a> </td>
    </tr>
  <?php } ?> 
  </tbody>
</table>
<br />
<table id="" class=" mt-2">
  <thead class="bg-dark p-2 ">
    <h2>Depense</h2>
    <tr>
      <th>id</th>
      <th>Désignation</th>
      <th>Prix unitaire</th>
      <th>Quantité</th>
      <th>Montant</th>
      <th>Date</th>
      <th>Action</th>
      <th>Users</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     
      foreach($operationsD as $operation){   ?> 
    <tr>
      <td><?php echo($operation['id']); ?> </td>
      <td><?php echo($operation['designation']); ?> </td>
      <td><?php echo($operation['prixU']); ?> </td>
      <td><?php echo($operation['quantite']); ?> </td>
      <td><?php echo($operation['montant']); ?> </td>
      <td><?php echo($operation['date']); ?> </td>
      <td><?php echo($operation['action']); ?> </td>
      <td><?php echo($operation['nom_user']); ?> </td>
      <td><a href="index.php?page=edit&id=<?php echo $operation['id']; ?>"><i class="fa fa-edit"></i></a> </td>
    </tr>
  <?php } ?> 
  </tbody>
  
</table>
<script>
  
$('#bubbleEx').mdbEditor({
  bubbleEditor: true
});

$('.dataTables_length').addClass('bs-select');
</script>
</div>
