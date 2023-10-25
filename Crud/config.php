<?php
$host = "localhost";
$port = "5432";
$dbname = "gestion_contacts";
$user = "admin";
$password = "admin";

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";

try {
    $pdo = new PDO($dsn);
    // Définir l'attribut PDO pour lever une exception en cas d'erreur SQL.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En cas d'erreur de connexion, afficher le message d'erreur.
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}
?>
