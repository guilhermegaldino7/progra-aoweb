<?php
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Pega os valores enviados pelo formulário
    $tipo = $_POST["tipo"];
    $valor_inicial = $_POST["valor"];
    $rendimento_mensal = 0;

    // Define o rendimento com base no tipo de investimento
    if ($tipo == 1) {
        $rendimento_mensal = 0.03; // 3% para Poupança
    } elseif ($tipo == 2) {
        $rendimento_mensal = 0.04; // 4% para Fundos de Renda Fixa
    }

    // Calcula o valor corrigido (valor inicial + rendimento)
    $valor_corrigido = $valor_inicial + ($valor_inicial * $rendimento_mensal);

    // Exibe o resultado
    echo "<h2>Resultado do Cálculo</h2>";
    echo "Tipo de Investimento: " . ($tipo == 1 ? "Poupança" : "Fundos de Renda Fixa") . "<br>";
    echo "Valor Investido: R$ " . number_format($valor_inicial, 2, ',', '.') . "<br>";
    echo "Valor Corrigido após 1 mês: R$ " . number_format($valor_corrigido, 2, ',', '.');
    
} else {
    // Se o formulário não foi enviado, redireciona de volta
    header("Location: index.html");
    exit();
}
?>
