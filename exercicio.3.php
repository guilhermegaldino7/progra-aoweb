<?php
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Pega os valores enviados pelo formulário
    $salario_fixo = $_POST["salario_fixo"];
    $vendas = $_POST["vendas"];
    $comissao_percentual = 0.04; // 4%

    // Calcula o valor da comissão
    $comissao = $vendas * $comissao_percentual;

    // Calcula o salário final (salário fixo + comissão)
    $salario_final = $salario_fixo + $comissao;

    // Exibe os resultados formatados
    echo "<h2>Resultado</h2>";
    echo "Salário Fixo: R$ " . number_format($salario_fixo, 2, ',', '.') . "<br>";
    echo "Valor da Comissão (4% sobre vendas): R$ " . number_format($comissao, 2, ',', '.') . "<br>";
    echo "Salário Final: R$ **" . number_format($salario_final, 2, ',', '.') . "**";
    
} else {
    // Se o formulário não foi enviado, redireciona de volta
    header("Location: index.html");
    exit();
}
?>
