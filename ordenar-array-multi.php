<?php 

/*
 * Nome: Deinar Bottamedi
 * Data: 15/05/2017
 * Como fazer ordenção de uma array multidimensional
 */

//Array fora da ordem
$dados = [
    0 => ['cod_veiculo' => 500, 'nome' => 'astra', 'valor' => 15500.00],
    1 => ['cod_veiculo' => 300, 'nome' => 'astra', 'valor' => 75500.00],
    2 => ['cod_veiculo' => 700, 'nome' => 'zafira', 'valor' => 90000.00],
    3 => ['cod_veiculo' => 900, 'nome' => 'jetta', 'valor' => 95500.00],
    3 => ['cod_veiculo' => 900, 'nome' => 'corsa', 'valor' => 10000.00],
    4 => ['cod_veiculo' => 100, 'nome' => 'astra', 'valor' => 35500.00]
];

// Imprimir array original
echo "Array fora da ordem:";
echo "<br/>";
echo "<pre>";
print_r($dados);
echo "</pre>";
echo "<br/>";
echo "<br/>";


// Obtem uma lista de colunas
foreach ($dados as $chave => $linha) {
    $nome[$chave] = $linha['nome'];
    $valor[$chave] = $linha['valor'];
}

// Ordena os dados por nome crescente, valor decrescente.
// Adiciona $dados como último parâmetro, para ordenar por uma chave comum.
array_multisort($nome, SORT_ASC, $valor, SORT_DESC, $dados);

// Imprimir array ordenada
echo "Array ordenada por 'nome' em ordem crescente e por 'valor' em ordem decrescente:";
echo "<br/>";
echo "<pre>";
print_r($dados);
echo "</pre>";
