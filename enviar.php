<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$cidade = $_POST["cidade"];
$tecnico = $_POST["tecnico"];
$idLoja = $_POST["idLoja"];
$term  =$_POST["term"];
$token = $_POST["token"];

echo "Cidade: ".$cidade ."<br>" . "Técnico: ".$tecnico . "<br>Loja: " .$idLoja . "<br>Term: ".$term . "<br>Token: " .$token;


 $sql = "INSERT INTO instalacao (loja, term, tecnico, cidade) VALUES ($idLoja, $term, $tecnico, $cidade)"; 

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>