<?php
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Pega os valores enviados pelo formulário
    $base_maior = $_POST["base_maior"];
    $base_menor = $_POST["base_menor"];
    $altura = $_POST["altura"];

    // Calcula a área do trapézio usando a fórmula
    $area = (($base_maior + $base_menor) * $altura) / 2;

    // Exibe o resultado formatado
    echo "<h2>Resultado</h2>";
    echo "Base Maior: **" . htmlspecialchars($base_maior) . "**<br>";
    echo "Base Menor: **" . htmlspecialchars($base_menor) . "**<br>";
    echo "Altura: **" . htmlspecialchars($altura) . "**<br><br>";
    echo "A área do trapézio é: **" . number_format($area, 2, ',', '.') . "**";
    
} else {
    // Se o formulário não foi enviado, redireciona de volta
    header("Location: index.html");
    exit();
}
?>
