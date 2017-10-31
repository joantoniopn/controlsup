<?php
/*
$colors = array("Preto", "Azul");


for($i=0; $i < count($colors); $i++){
	echo $colors[$i]."<br>";
}

$cores = array("azul", "amarelo", "verde", "vermelho");
foreach ($cores as $cor) {
    echo "$cor<br>";
}
*/



// Array valores
$instalacao = array();
//Array colunas
$colunas = array();

$term = 111;
$data = "20/10/2017";
$nome = "Joao Neto";

$coluna1 = "terminal";
$coluna2 = "data_transaction";
$coluna3 = "nome";

array_push($instalacao, $term, $data, $nome);
$contador = count($instalacao);

array_push($colunas, $coluna1, $coluna2, $coluna3);
$contador = count($colunas);

echo "INSERT INTO (";
foreach ($colunas as $indice => $dados) {
		echo $dados;
		if($indice < $contador-1)
			echo ", ";
}
echo ")";

echo " VALUES (";
foreach ($instalacao as $indice => $dados) {
		echo $dados;
		if($indice < $contador-1)
			echo ", ";
}
echo ")";



//Array Key

$dados = array();
$colums = array();


function array_keys_prefix($arr, $pref = "") {
    $rarr = array();
    foreach ($arr as $key => $val) {
        $rarr[$pref.$key] = $val;
    }
    return $rarr;
}

function array_keys_prefix_multi($arr, $pref = "") {
    $rarr = array();
    foreach ($arr as $key => $val) {
        $rarr[] = array_keys_prefix($val, $pref);
    }
    return $rarr;
}

// $a = array("foo" => "FOO", "bar" => "BAR", "baz" => "BAZ"); // or
$a = array("foo" => "FOO", "bar" => "BAR", "baz" => array(1,2,3));
print_r(array_keys_prefix($a, "my_"));

// db fetch...
$products = array(
    array("id" => 1, "name" => "Foo"),
    array("id" => 2, "name" => "Bar")
);
print_r(array_keys_prefix_multi($products, "product_"));
