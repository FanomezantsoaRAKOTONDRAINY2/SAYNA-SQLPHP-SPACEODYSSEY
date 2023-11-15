 
            <!-- scripte de la fenetre astroute -->
<script>
    function openEditModal(id, nom, etat_sante, taille, poids) {
        document.getElementById('edit_astronaute_id').value = id;
        document.getElementById('edit_nom').value = nom;
        document.getElementById('edit_etat_sante').value = etat_sante;
        document.getElementById('edit_taille').value = taille;
        document.getElementById('edit_poids').value = poids;
        $('#editModal').modal('show');
    }
</script>

<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>ESOALAHY Josefa && RAKOTONDRAINY Fanomezantsoa <a>SYSTEME DE GESTION DANS L'ESPACE</a>.</strong> All rights reserved.
</footer>
</div>

<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>