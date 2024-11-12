<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>
    <link rel="stylesheet" href="styles.css">

<div class="card-container">
            <div class="card">
                <h1>Mon Profil</h1>
                </head>
<body>
    <form action="index.php?uc=profile&action=modifier" method="POST">
        <div>
            <label>Nom:</label>
            <input type="text" id="nom" name="nom" value="<?php echo $_SESSION['nom_client'] ?>"required>
        </div>
        <div>
            <label>Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo $_SESSION['prenom_client'] ?>" required>
        </div>
        <div>
            <label>Email :</label>
            <input type="email" id="email" name="email" value="<?php echo $_SESSION['mail_client'] ?>" required>
        </div>
        <div>

            <label>Role :</label>
            <?php echo $_SESSION['role_client'] ?>"
        </div>
        <button> Modifier </button>
                
    </form>
</body>

</html>
