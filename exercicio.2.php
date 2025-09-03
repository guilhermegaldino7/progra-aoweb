<?php
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Pega os valores enviados pelo formulário
    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];

    // Calcula a média das duas notas
    $media = ($nota1 + $nota2) / 2;

    // Exibe a mensagem formatada
    echo "O aluno **" . htmlspecialchars($nome) . "** ficou com **" . number_format($media, 1, ',', '.') . "** de média.";
    
} else {
    // Se o formulário não foi enviado, redireciona de volta
    header("Location: index.html");
    exit();
}
?>
