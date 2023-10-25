<?php
include "config.php";

$stmt = $pdo->query("SELECT * FROM contacts");
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

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
