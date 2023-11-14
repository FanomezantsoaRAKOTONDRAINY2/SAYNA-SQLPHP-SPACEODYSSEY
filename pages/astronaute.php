
<?php include "../html/header.php" ; // En tete HTML
include "../html/liens.php"; // navbar
?>

<?php
include "../database/dbConnect.php";
?>


<div class="content-wrapper" style="background-color: #35394B">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">FORMULAIRE DES ASTRONAUTES</h3>
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
                                    <input type="hidden" name="operation_astronaute" value="create">

                                    <div class="form-group">
                                        <label for="nom_astronaute">Nom</label>
                                        <input type="text" class="form-control" name="nom_astronaute" placeholder="Enter le nom de la astronaute" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="etat_sante">État de santé:</label>
                                        <select name="etat_sante" required>
                                            <option value="Bon">Bon</option>
                                            <option value="Malade">Malade</option>
                                            <option value="Decede">Décédé</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="taille_astronaute">Taille:</label>
                                        <input type="text" class="form-control" name="taille_astronaute" placeholder="Taille" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="poids_astronaute">Poids:</label>
                                        <input type="number" name="poids_astronaute" class="form-control" rows="3" placeholder="Enter ..."></input>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="submit_astronaute" class="btn btn-primary">Ajouter l'astronaute</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <br>
        <br>
        <br>
        <br>

        <div><h1 STYLE="text-align: center">
                LISTES DES ASTRONAUTES EXISTANTES
            </h1><div>
                <div class="tableView">
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                        <thead>
                                        <tr>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nom</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Etat de santé</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Taille</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">poids</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th></tr>
                                        </thead>
                                        <tbody>

                                        <?php while ($row = $result_astronautes->fetch_assoc()) : ?>
                                            <tr class="odd">
                                                <td class="dtr-control sorting_1" tabindex="0"><?php echo $row['nom']; ?></td>
                                                <td><?php echo $row['etat_sante']; ?></td>
                                                <td><?php echo $row['taille']; ?></td>
                                                <td><?php echo $row['poids']; ?></td>

                                                <td>
                                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="display:inline;">
                                                        <input type="hidden" name="operation_astronaute" value="delete">
                                                        <input type="hidden" name="astronaute_id" value="<?php echo $row['id']; ?>">
                                                        <button type="submit" name="submit_astronaute"> <i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                    <a href="#" onclick="openEditModal('<?php echo $row['id']; ?>', '<?php echo $row['nom']; ?>', '<?php echo $row['etat_sante']; ?>', '<?php echo $row['taille']; ?>', '<?php echo $row['poids']; ?>')"><i class="fas fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- fenetre de la modification  -->
                                <div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Modifier Astronaute</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="editForm" action="" method="post">
                                                    <input type="hidden" name="operation_astronaute" value="update">
                                                    <input type="hidden" name="astronaute_id" id="edit_astronaute_id" value="">
                                                    <label for="edit_nom">Nom:</label>
                                                    <input type="text" class="form-control" id="edit_nom" name="edit_nom" required>
                                                    <label for="edit_etat_sante">État de santé:</label>
                                                    <input type="text" class="form-control" id="edit_etat_sante" name="edit_etat_sante" required>
                                                    <label for="edit_taille">Taille:</label>
                                                    <input type="text" class="form-control" id="edit_taille" name="edit_taille" required>
                                                    <label for="edit_poids">Poids:</label>
                                                    <input type="text" class="form-control" id="edit_poids" name="edit_poids" required>
                                                    <button type="submit" class="btn btn-primary" name="submit_edit_astronaute">Enregistrer les modifications</button>
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


<br>
<br>    
<?php
include "../html/footer.php"
?>

