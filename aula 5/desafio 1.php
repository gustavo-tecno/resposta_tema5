<?php 
$estoque = array("Caneta", "Lápis", "Borracha"); 

echo "array antes da modificação";
print_r($estoque);
echo "<br>";

@$estoque [1] = "marcador";
echo "array apos a modificação";
print_r($estoque);
echo "<br>";

@$estoque [] = "grampeador";
echo "array apos inserirgrampeador ";
print_r($estoque);
echo "<br>";

array_splice ($estoque, 1, 0, "clips");
echo "array apos inserir clips na posicao 2";
print_r($estoque);
echo "<br>";

unset( $estoque [2] );
echo "array após remover o elemento na posição 1 (Marcador)";
print_r($estoque);
echo "<br>";

$estoque = array_values( $estoque );
echo "Array após reindexação";
print_r( $estoque );
echo "<br>";












?>