<?php 
  session_start();
?>
<?php if(empty($_COOKIE["ieUser"])){ ?>
        <script> location.replace("login.php"); </script>
        <?php } ?>
<!DOCTYPE html>
<html lang="FR">
    <?php include('header.php'); ?>
    <link rel="stylesheet" href="css/animation.scss" type="text/css" />
    <body>
        <?php include('topbar.php'); ?> 
        <?php include('navbar.php'); ?>
        <?php
            require("RumpleQuery.php");
            $rmQuery = new RumpleQuery();
            $operationsR = $rmQuery->select("operations",["*"],"action","recette");
            $operationsD = $rmQuery->select("operations",["*"],"action","depense");
        ?>
        <div class="panel_total bg-dark">

            <div class="p-12">
                <span>
                    <?php 
                        $query = "SELECT SUM(montant) FROM operations";
                        $sum = 0;
                    ?>
                <?php 
                    $query = "SELECT SUM(montant) FROM operations WHERE action='depense' ";
                    $sumDepense = $rmQuery->query($query);
                    foreach ($sumDepense as $depense){
                    $sum = $depense[0];
                ?>
                </span>
                <br/>
                <span style="color: white;">Dépense total: <?php echo $depense[0]; ?> fcfa</span>
                <?php } ?>
                <br/>
                <?php 
                    $query = "SELECT SUM(montant) FROM operations WHERE action='recette' ";
                    $sumRecette = $rmQuery->query($query);
                    foreach ($sumRecette as $recette){
                        $sum = $sum - $recette[0];
                ?>
                <span style="color: white;">Recette total: <?php echo $recette[0]; ?> fcfa</span>
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
                    <h2>Recette             <button onclick="location.href = 'print_recette.php';" class=" btn btn-rounded text-white purple m-2 lighten-2 btn-sm addNewRow" type="button"><i class="fas fa-print"></i></button></h2>
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
                    <?php foreach($operationsR as $operation){   ?> 
                        <tr>
                            <td><?php echo($operation['id']); ?> </td>
                            <td><?php echo($operation['designation']); ?> </td>
                            <td><?php echo($operation['prixU']); ?> </td>
                            <td><?php echo($operation['quantite']); ?> </td>
                            <td><?php echo($operation['montant']); ?> </td>
                            <td><?php echo($operation['date']); ?> </td>
                            <td><?php echo($operation['action']); ?> </td>
                            <td><?php echo($operation['nom_user']); ?> </td>
                            <td><a href="edit.php?id=<?php echo $operation['id']; ?>"><i class="fa fa-edit"></i></a> </td>
                        </tr>
                    <?php } ?> 
                </tbody>
            </table>
            <br />
            <table id="" class=" mt-2">
                <thead class="bg-dark p-2 ">
                    <h2>Depenses  <span><button id="rpBtn" onclick="location.href = 'print_depense.php';" class=" btn btn-rounded text-white purple m-2 lighten-2 btn-sm addNewRow" type="button"><i class="fas fa-print"></i></button>
</h2>

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
                    <?php foreach($operationsD as $operation){   ?> 
                        <tr>
                            <td><?php echo($operation['id']); ?> </td>
                            <td><?php echo($operation['designation']); ?> </td>
                            <td><?php echo($operation['prixU']); ?> </td>
                            <td><?php echo($operation['quantite']); ?> </td>
                            <td><?php echo($operation['montant']); ?> </td>
                            <td><?php echo($operation['date']); ?> </td>
                            <td><?php echo($operation['action']); ?> </td>
                            <td><?php echo($operation['nom_user']); ?> </td>
                            <td><a href="edit.php?id=<?php echo $operation['id']; ?>"><i class="fa fa-edit"></i></a> </td>
                        </tr>
                    <?php } ?> 
                </tbody>
            </table>
        </div>
    </body>
</html>