<?php include "../html/header.php" ; // En tete HTML
include "../html/liens.php"; // navbar
?>

<?php
include "../database/dbConnect.php";
?>

<div class="content-wrapper"  style="background-color: #35394B">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">FORMULAIRE DES PLANETTES</h3>
        </div>

        <div class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Ajouter
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="card-body">
                                    <input type="hidden" name="operation_planete" value="create">

                                    <div class="form-group">
                                        <label for="nom_planete">Nom</label>
                                        <input type="text" class="form-control" name="nom_planete" placeholder="Enter le nom de la planete" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="circonference">Circonference (en km)</label>
                                        <input type="number" class="form-control" name="circonference" placeholder="Circonference" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="distance_terre">Distance à la Terre (en km):</label>
                                        <input type="text" class="form-control" name="distance_terre" placeholder="Distance en km" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="documentation">Documentation:</label>
                                        <textarea name="documentation" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="submit_planete" class="btn btn-primary">Ajouter la planete</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        

        <div><h1 STYLE="text-align: center">
                LISTES DES PLANETES EXISTANTES
            </h1><div>
        <div class="tableView">
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nom</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Circonference</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Distance</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Documentation</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th></tr>
                                </thead>
                                <tbody>

                                <?php while ($row = $result_planetes->fetch_assoc()) : ?>
                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0"><?php echo $row['nom']; ?></td>
                                        <td><?php echo $row['circonference']. ' Km' ?></td>
                                        <td><?php echo $row['distance_terre']. ' Km' ?></td>
                                        <td><?php echo $row['documentation']; ?></td>
                                        <td>
                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="display:inline;">
                                                <input type="hidden" name="operation_planete" value="delete">
                                                <input type="hidden" name="planete_id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" name="submit_planete"> <i class="fas fa-trash-alt"></i> </button>
                                            </form>
                                            <a href="#" onclick="openEditModal('<?php echo $row['id']; ?>', '<?php echo $row['nom']; ?>', '<?php echo $row['circonference']; ?>', '<?php echo $row['distance_terre']; ?>', '<?php echo $row['documentation']; ?>')"><i class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>

                                </tbody>
                            </table>      
                        </div>
                                       <!-- Fenetre de modifiction -->
                            <div class="modal" id="editModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modifier Planète</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="editForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <input type="hidden" name="operation_planete" value="edit">
                                        <input type="hidden" name="planete_id" id="edit_planete_id">
                                        <label for="edit_nom">Nom:</label>
                                        <input type="text" name="edit_nom" id="edit_nom" class="form-control" required>
                                        <label for="edit_circonference">Circonférence:</label>
                                        <input type="text" name="edit_circonference" id="edit_circonference" class="form-control" required>
                                        <label for="edit_distance">Distance:</label>
                                        <input type="text" name="edit_distance" id="edit_distance" class="form-control" required>
                                        <label for="edit_documentation">Documentation:</label>
                                        <textarea name="edit_documentation" id="edit_documentation" class="form-control" required></textarea>
                                        <button type="submit" name="submit_edit_planete">Enregistrer les modifications</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                             
<?php
include "../html/footer.php"
?>
<script>
  function openEditModal(id, nom, circonference, distance, documentation) {
    document.getElementById('edit_planete_id').value = id;
    document.getElementById('edit_nom').value = nom;
    document.getElementById('edit_circonference').value = circonference;
    document.getElementById('edit_distance').value = distance;
    document.getElementById('edit_documentation').value = documentation;
    $('#editModal').modal('show');
  }
  
</script>  


