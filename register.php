<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Compte</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Créer un Compte</h2>
        <form action="user_signup.php" method="post">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prenom:</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="CIN">CIN:</label>
            <input type="text" id="CIN" name="CIN" required>

            <label for="telephone">Téléphone:</label>
            <input type="text" id="telephone" name="telephone" required>

            <label for="date_naissance">Date de Naissance:</label>
            <input type="date" id="date_naissance" name="date_naissance" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="motDePasse">Mot de Passe:</label>
            <input type="password" id="motDePasse" name="motDePasse" required>

            <input type="submit" value="Créer un Compte">
        </form>
    </div>
</body>
</html>
