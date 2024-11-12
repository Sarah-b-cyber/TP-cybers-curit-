<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Clients</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Liste des Clients</h1>

<?php if($listClients) : ?>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listClients as $cli) : ?>
                <tr>
                    <td><?php echo $cli['nom'] ; ?></td>
                    <td><?php echo $cli['prenom']; ?></td>
                    <td>
                    <a href="index.php?uc=clients&action=sup_clients&id=<?php echo $cli['id']  ?>" class="btnUpdate">Supprimer</a>
                </td>
                </tr>
                <tr>
            <?php endforeach; ?>
            </tbody>
            </table>
            <a href="index.php?uc=accueil" type="submit" class="btn btn-primary">Terminer
            </a>
    </div>
<?php else : ?>
    <p>Aucun client trouvé.</p>
<?php endif; ?>
