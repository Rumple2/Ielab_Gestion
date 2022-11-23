<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="FR">
        <?php include('header.php');   ?>
        <link rel="stylesheet" href="css/animation.scss" type="text/css" />
    <body>
        <?php include('topbar.php'); ?> 
        <?php include('navbar.php'); ?>
<?php
  require("RumpleQuery.php");
  $rmQuery = new RumpleQuery();
  $operations = $rmQuery->select("users",["*"]);
?><div class="wrapper-editor user_list">

<style>
	.user_list{
		height: 600px;
		
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
<table id="" class="">
  <thead class="p-2" style="margin-left: 5%; padding:50px;">
    <tr>
      <th>id</th>
      <th>Nom</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      foreach($operations as $operation){   ?> 
    <tr>
      <td><?php echo($operation['id']); ?> </td>
      <td><?php echo($operation['nom']); ?> </td>
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
</body>
</html>