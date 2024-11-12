<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Bienvenue, <?php echo $_SESSION['prenom_client'] . ' ' . $_SESSION['nom_client']; ?> !</h1>
            <p>Nous sommes heureux de vous revoir !</p>
        </div>
        
        <div class="card-container">
            <div class="card">
                <h2>Mon Profil</h2>
                <p>Gérer vos informations personnelles.</p>
                <a href='index.php?uc=profile'>Gérer mon profil</a>
            </div>
            <div class="card-container">

        <div class="card">
            <h2>Clients</h2>
            <p>Visualiser les clients.</p>
            <a href='index.php?uc=clients'>Gérer mon profil</a>
        </div>
    
</body>
</html>
