<?php

/* Conecta a um banco de dados MySQL. Substitua as credenciais do banco de dados.  */
$conn = new PDO('mysql:host=localhost;dbname=sup', 'root', '');

$stmt = $conn->prepare(
    'INSERT INTO posts (title, content) VALUES (:title, :content)'
);

?>