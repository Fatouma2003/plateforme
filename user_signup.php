<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plateforme";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$CIN = $_POST['CIN'];
$telephone = $_POST['telephone'];
$date_naissance = $_POST['date_naissance'];
$email = $_POST['email'];
$motDePasse = $_POST['motDePasse'];

// Vérification si le CIN existe déjà
$sql_check = "SELECT * FROM Candidat WHERE CIN = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("s", $CIN);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    echo "Un compte avec ce CIN existe déjà.";
} else {
    // Hachage du mot de passe
    // $motDePasseHashe = password_hash($motDePasse, PASSWORD_DEFAULT);

    // Préparation et exécution de la requête d'insertion pour la table Candidat
    $sql = "INSERT INTO Candidat (nom, prenom, CIN, telephone, date_naissance, email, motDpass) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssssss", $nom, $prenom, $CIN, $telephone, $date_naissance, $email, $motDePasse);

        $stmt->close();
    } else {
        echo "Erreur de préparation de la requête d'insertion: " . $conn->error;
    }
}

$stmt_check->close();
$conn->close();
?>
