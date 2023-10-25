<?php
include "config.php";

$stmt = $pdo->query("SELECT * FROM contact");
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Contacts</title>
</head>
<body>

<h2>Liste des Contacts</h2>

<!-- Affichage des contacts -->
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Action</th>
    </tr>
    <?php foreach ($contacts as $contact): ?>
        <tr>
            <td><?= $contact["nom"] ?></td>
            <td><?= $contact["prenom"] ?></td>
            <td><?= $contact["email"] ?></td>
            <td><?= $contact["telephone"] ?></td>
            <td>
                <a href="update.php?id=<?= $contact["id"] ?>">Modifier</a>
                <a href="delete.php?id=<?= $contact["id"] ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- Lien vers la page d'ajout -->
<p><a href="create.php">Ajouter un contact</a></p>

</body>
</html>
