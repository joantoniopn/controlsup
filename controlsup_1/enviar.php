<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php

$db = open_database(); 
	
	if ($db) {
		echo '<h1>Banco de Dados Conectado!</h1>';
	} else {
		echo '<h1>ERRO: Não foi possível Conectar!</h1>';
	}

$cidade = $_POST["cidade"];
$tecnico = $_POST["tecnico"];
$idLoja = $_POST["idLoja"];
$term  =$_POST["term"];
$token = $_POST["token"];

echo "Cidade: ".$cidade ."<br>" . "Técnico: ".$tecnico . "<br>Loja: " .$idLoja . "<br>Term: ".$term . "<br>Token: " .$token;

/*
$sql = "INSERT INTO instalacao (loja, term, tecnico, cidade) values (:idLoja, :term, :tecnico, :cidade) ";

$stmt = DB::prepare($sql);
$stmt->bindParam("loja",$instalacao->idLoja);
$stmt->bindParam("term",$instalacao->term);
$stmt->bindParam("tecnico",$instalacao->tecnico);
$stmt->bindParam("cidade",$instalacao->cidade);
$stmt->execute();
$instalacao->id = $conn->lastInsertId(); */


?>