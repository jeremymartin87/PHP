<?php
$host = "localhost";
$port = "5432";
$dbname = "gestion_contacts";
$user = "admin";
$password = "admin";

// Connexion au serveur PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Vérification de la connexion
if (!$conn) {
    die("La connexion a échoué : " . pg_last_error());
}

// Création de la table contact
$sql = "CREATE TABLE IF NOT EXISTS contact (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telephone VARCHAR(20) NOT NULL
)";

$result = pg_query($conn, $sql);

if ($result) {
    echo "Table contact créée avec succès.\n";
} else {
    echo "Erreur lors de la création de la table contact : " . pg_last_error($conn);
}

// Fermeture de la connexion
pg_close($conn);
?>
