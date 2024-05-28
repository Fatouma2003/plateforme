<?php include('login.php') ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Connexion</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="cin">N° CIN:</label>
                <input type="text" class="form-control" id="cin" name="CIN" required>
            </div>
            <div class="form-group">
                <label for="motDePasse">Mot de Passe:</label>
                <input type="password" class="form-control" id="motDePasse" name="motDePasse" required>
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
            <p><a href="register.php">Créer un compte</a></p>
        </form>
    </div>
</body>
</html>
