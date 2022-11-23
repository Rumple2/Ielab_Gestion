<?php
  require("RumpleQuery.php");
  $rmQuery = new RumpleQuery();
  $operations = $rmQuery->select("operations",["*"]);

  header("Content-Type: application/xls");
  header("Content-Disposition: attachment; filename=download.xls");
?><div class="wrapper-editor bg-dark">
<style>
    td{
      padding: 0px;
      margin: 0;
      /*border: 1px solid;*/
    }
    tr{
      /**padding: 10px;
      font-weight: bold;
      border: 1px solid;*/
    }
    tr:hover{
      /**padding: 20px;
      background-color: grey;*/
    }

  </style>
<table id="" class="bg-dark">
<center><h2>TOUTE LES OPERATIONS DE IELAB </h2></center>
  <thead class="bg-dark p-2" style="margin-left: 5%; padding:50px;">
    <tr>
      <th>id</th>
      <th>Designation</th>
      <th>Prix unitaire</th>
      <th>Qunatite</th>
      <th>Montant</th>
      <th>Date</th>
      <th>Action</th>
      <th>Users</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      foreach($operations as $operation){   ?> 
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
<script>
  
$('#bubbleEx').mdbEditor({
  bubbleEditor: true
});

$('.dataTables_length').addClass('bs-select');
</script>
</div>