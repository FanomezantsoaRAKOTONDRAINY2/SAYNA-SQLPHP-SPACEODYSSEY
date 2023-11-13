<?php
// Connexion à la base de données (à remplacer par vos informations)
$servername = "localhost";
$username = "root";
$password = "Josefa@124578";
$dbname = "spaceodyssey";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Opération CRUD pour les Planètes
if (isset($_POST['submit_planete'])) {
    // Create
    if ($_POST['operation_planete'] === 'create') {
        $nom_planete = $_POST['nom_planete'];
        $circonference = $_POST['circonference'];
        $distance_terre = $_POST['distance_terre'];
        $documentation = $_POST['documentation'];

        $sql = "INSERT INTO Planetes (nom, circonference, distance_terre, documentation) VALUES ('$nom_planete', $circonference, $distance_terre, '$documentation')";
    }
    // Update
    elseif ($_POST['operation_planete'] === 'update') {
        $planete_id = $_POST['planete_id'];
        $nom_planete = $_POST['nom_planete'];
        $circonference = $_POST['circonference'];
        $distance_terre = $_POST['distance_terre'];
        $documentation = $_POST['documentation'];

        $sql = "UPDATE Planetes SET nom='$nom_planete', circonference=$circonference, distance_terre=$distance_terre, documentation='$documentation' WHERE id=$planete_id";
    }
    // Delete
    elseif ($_POST['operation_planete'] === 'delete') {
        $planete_id = $_POST['planete_id'];
        $sql = "DELETE FROM Planetes WHERE id=$planete_id";
    }

    if ($conn->query($sql) === TRUE) {
//        echo "Opération Planète réussie";
    } else {
        echo "Erreur : " . $conn->error;
    }
}




// Opération CRUD pour les Astronautes
if (isset($_POST['submit_astronaute'])) {
    // Create
    if ($_POST['operation_astronaute'] === 'create') {
        $nom_astronaute = $_POST['nom_astronaute'];
        $etat_sante = $_POST['etat_sante'];
        $taille_astronaute = $_POST['taille_astronaute'];
        $poids_astronaute = $_POST['poids_astronaute'];

        $sql = "INSERT INTO Astronautes (nom, etat_sante, taille, poids) VALUES ('$nom_astronaute', '$etat_sante', $taille_astronaute, $poids_astronaute)";
    }
    // Update
    elseif ($_POST['operation_astronaute'] === 'update') {
        $astronaute_id = $_POST['astronaute_id'];
        $nom_astronaute = $_POST['nom_astronaute'];
        $etat_sante = $_POST['etat_sante'];
        $taille_astronaute = $_POST['taille_astronaute'];
        $poids_astronaute = $_POST['poids_astronaute'];

        $sql = "UPDATE Astronautes SET nom='$nom_astronaute', etat_sante='$etat_sante', taille=$taille_astronaute, poids=$poids_astronaute WHERE id=$astronaute_id";
    }
    // Delete
    elseif ($_POST['operation_astronaute'] === 'delete') {
        $astronaute_id = $_POST['astronaute_id'];
        $sql = "DELETE FROM Astronautes WHERE id=$astronaute_id";
    }

    if ($conn->query($sql) === TRUE) {
//        echo "Opération Astronaute réussie";
    } else {
        echo "Erreur : " . $conn->error;
    }
}


// Compteur pour les planetes

if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Requête SQL pour compter les lignes dans une table
$table_name = "planetes"; // Remplace par le nom de ta table
$sql = "SELECT COUNT(*) AS total_rows FROM $table_name";

// Exécution de la requête
$result = $conn->query($sql);

// Vérification des erreurs
if (!$result) {
    die("Erreur : " . $conn->error);
}

// Récupération du résultat
$row = $result->fetch_assoc();
$total_rows = $row['total_rows'];



// Compteur pour les planetes

// Requête SQL pour compter les lignes dans une table
$table_name1 = "astronautes"; // Remplace par le nom de ta table
$sql = "SELECT COUNT(*) AS total_rows FROM $table_name1";

// Exécution de la requête
$result1 = $conn->query($sql);

// Vérification des erreurs
if (!$result) {
    die("Erreur : " . $conn->error);
}

// Récupération du résultat
$row1 = $result1->fetch_assoc();
$total_rows1 = $row1['total_rows'];



// Récupérer les données existantes pour l'affichage
$result_planetes = $conn->query("SELECT * FROM Planetes");
$result_astronautes = $conn->query("SELECT * FROM Astronautes");

$conn->close();
?>
