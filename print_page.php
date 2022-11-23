<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="FR">
        <?php include('header.php');   ?>
        <link rel="stylesheet" href="css/animation.scss" type="text/css" />
<?php
  require("RumpleQuery.php");
  $rmQuery = new RumpleQuery();
  $operations = $rmQuery->select("operations",["*"]);
  $operationsR = $rmQuery->select("operations",["*"],"action","recette");
  $operationsD = $rmQuery->select("operations",["*"],"action","depense");
?><div class="wrapper-editor bg-dark">
    <script>
        window.print();
    </script>
<style>
    @page{
        size: A4;
        margin: 0;
    }
    td{
      padding: 0px;
      margin: 0;
    }
    thead tr th{
      background-color: grey;
      text-align : center;
    }
    tbody tr td{
      background-color: #C9BDB3;
      border: 1px solid black;
      text-align : center;
    }
    
    tbody tr{
      padding: 10px;
      font-weight: bold;
      border: 1px solid black;
      text-align : center;
    }
    tr:hover{
      padding: 20px;
      background-color: white;
    }

  </style>
  <table id="" class="bg-dark m-2">
<center><h2>TOUTE LES OPERATIONS DE IELAB </h2></center>
  <thead class="bg-dark p-2">
    <tr>
    <center><h2>Recette</h2></center>
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
    </tr>
  <?php } ?> 
  </tbody>
</table>
<br />
<table id="" class=" m-2">
  <thead class="bg-dark p-2 ">
    
    <tr>
      <center><h2>Depense</h2><center>
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
  </div>
<script>
  
$('#bubbleEx').mdbEditor({
  bubbleEditor: true
});

$('.dataTables_length').addClass('bs-select');
</script>
