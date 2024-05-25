<?php
session_start();

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
    $email = $_POST['email'];
    $motDePasse = $_POST['motDePasse'];

    $sql = "SELECT id, nom, email, motDePasse FROM utilisateur WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($motDePasse, $row['motDePasse'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_nom'] = $row['nom'];
            header("Location: inscription.html");
            exit();
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "No user found with this email.";
    }

    $stmt->close();
}

$conn->close();
?>
