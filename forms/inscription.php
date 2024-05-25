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
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $genre = $_POST['genre'];
    $cin = $_POST['cin'];
    $telephone = $_POST['telephone'];
    $commune_residence = $_POST['commune_residence'];
    $type_candidat = $_POST['type_candidat'];
    $orientation = $_POST['orientation'];

    // Handle file uploads
    $target_dir = "uploads/";
    $cin_pdf = $target_dir . basename($_FILES["CIN_copier"]["name"]);
    $cv_pdf = $target_dir . basename($_FILES["CV"]["name"]);
    $formulaire_pdf = $target_dir . basename($_FILES["formulaire"]["name"]);

    if (move_uploaded_file($_FILES["CIN_copier"]["tmp_name"], $cin_pdf) &&
        move_uploaded_file($_FILES["CV"]["tmp_name"], $cv_pdf) &&
        move_uploaded_file($_FILES["formulaire"]["tmp_name"], $formulaire_pdf)) {
        
        $sql = "INSERT INTO informations (nom, prenom,DN, genre, cin, telephone, Com_R, type_candidat, orientation, CIN_copier, CV, formulaire)
        VALUES ('$nom', '$prenom', '$date_naissance', '$genre', '$cin', '$telephone', '$commune_residence', '$type_candidat', '$orientation', '$cin_pdf', '$cv_pdf', '$formulaire_pdf')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your files.";
    }
}

$conn->close();
?>
