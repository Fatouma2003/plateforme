<?php
session_start();

$_SESSION['success']="";
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
    if (isset($_POST['CIN']) && isset($_POST['motDePasse'])) {
        $CIN = $_POST['CIN'];
        $motDePasse = $_POST['motDePasse'];

        // Debug: Affiche les données reçues
        var_dump($_POST);

        $sql = "SELECT id, nom, CIN, motDpass FROM Candidat WHERE CIN = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("s", $CIN);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                
                // Debug: Affiche les données récupérées depuis la base de données
                var_dump($row);

                // Debug: Affiche le mot de passe haché
                echo "Mot de passe haché: " . $row['motDpass'] . "<br>";
                echo "Mot de passe entré: " . $motDePasse . "<br>";

                // Vérification du mot de passe
                if ($motDePasse==$row['motDpass']) {
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['user_nom'] = $row['nom'];
                    $_SESSION['success']=" Vous êtes maintenant connectée";
                    header('Location: inscription-form.php');
                    exit();
                } else {
                    echo "CIN ou mot de passe invalide.";
                }
            } else {
                echo "Aucun utilisateur trouvé avec ce CIN.";
            }

            $stmt->close();
        } else {
            echo "Erreur de préparation de la requête: " . $conn->error;
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}

$conn->close();
?>
