<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plateforme";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $motDePasse = password_hash($_POST['motDePasse'], PASSWORD_BCRYPT); // Hash the password for security

    $sql = "INSERT INTO utilisateur (nom, email, motDePasse) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nom, $email, $motDePasse);

    if ($stmt->execute()) {
        echo "New user registered successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
