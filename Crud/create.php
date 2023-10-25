<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];

    $stmt = $pdo->prepare("INSERT INTO contact (nom, prenom, email, telephone) VALUES ( ?,  ?,  ?,  ?)");
    $stmt->execute([$nom, $prenom, $email, $telephone]);

    header("Location: index.php");
    exit();
}
?>

<form method="POST" action="create.php">
    Nom: <input type="text" name="nom" required><br>
    Prénom: <input type="text" name="prenom" required><br>
    Email: <input type="email" name="email" required><br>
    Téléphone: <input type="tel" name="telephone" required><br>
    <input type="submit" value="Ajouter">
</form>
