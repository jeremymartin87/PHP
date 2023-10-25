<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];

    $stmt = $pdo->prepare("UPDATE contact SET nom=?, prenom=?, email=?, telephone=? WHERE id=?");
    $stmt->execute([$nom, $prenom, $email, $telephone, $id]);

    header("Location: index.php");
    exit();
} elseif (isset($_GET["id"])) {
    $id = $_GET["id"];
    $stmt = $pdo->prepare("SELECT * FROM contact WHERE id = ?");
    $stmt->execute([$id]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!-- Formulaire de modification -->
<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $contact["id"] ?>">
    Nom: <input type="text" name="nom" value="<?= $contact["nom"] ?>" required><br>
    Prénom: <input type="text" name="prenom" value="<?= $contact["prenom"] ?>" required><br>
    Email: <input type="email" name="email" value="<?= $contact["email"] ?>" required><br>
    Téléphone: <input type="tel" name="telephone" value="<?= $contact["telephone"] ?>" required><br>
    <input type="submit" value="Modifier">
</form>
