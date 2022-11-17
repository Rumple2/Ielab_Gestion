<?php
  require("RumpleQuery.php");
  $rmQuery = new RumpleQuery();
  $operations = $rmQuery->select("users",["*"]);
?><div class="wrapper-editor user_list">

<style>
	.user_list{
		height: 600px;
		
	}
	th{
		color: black;
		font-weight: bold;
		padding-left: 15%;
	}
    td{
      padding: 10px;
      margin: 0;
      border: 1px solid black;
	  color: black;
		font-weight: bold;
    }
    tr{
      padding: 10px;
      font-weight: bold;
      border: 1px solid black;
    }
    tr:hover{
      padding: 20px;
      background-color: grey;
    }

  </style>
<table id="" class="" width="80%" style="margin-left: 15%; color: white; ">
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