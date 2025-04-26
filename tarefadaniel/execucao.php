<?php
require_once('modelo/Personagem.php');

$macaco = new Personagem();
$macaco->setNome("Macacobanana");
$macaco->setImagem("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6NJGULFXvZqYOs0t83EqL-BWqnqUAzhEQMiIC-UA70eHv4hBAr6jG6UAvy1t8VtoKPqw&usqp=CAU");
$macaco->setDescricao("Agora ele ficou serio....");

$davi = new Personagem();
$davi->setNome("Davibrito");
$davi->setImagem("data:image/jpeg;base64,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");
$davi->setDescricao("apenas um homem triste que comprava fruta toda semana.");

$samuel = new Personagem();
$samuel->setNome("samuelferreira");
$samuel->setImagem("https://media.discordapp.net/attachments/554783158885810177/1365499549212348556/image.png?ex=680d880e&is=680c368e&hm=161924cdf94b024d4a5e8ca2a273c88a18142c7ea052bba1f7a43fbdb8edfcd8&=&format=webp&quality=lossless");
$samuel->setDescricao("um belo dancarino");

$escolhas = [$macaco, $davi, $samuel];


$acerto = rand(1, 3);

if (!isset($_GET['palpite'])) {
    echo "<h2>Erro: Voce precisa informar um palpite</h2>";
    echo "<p>Exemplo: <code>?palpite=2</code></p>";
    exit;
}

$palpite = intval($_GET['palpite']);

if ($palpite < 1 || $palpite > 3) {
    echo "<h2>Palpite inválido! Escolha um número entre 1 e 3.</h2>";
    exit;
}

echo "<h1>Resultado do Palpite</h1>";

if ($palpite === $acerto) {
    $escolha = $escolhas[$acerto - 1];
    echo "<h2>Seu palpite estava certo. Parabens!!!!: " . $escolha->getNome() . "</h2>";
    echo "<img src='" . $escolha->getImagem() . "' alt='" . $escolha->getNome() . "' width='200'>";
    echo "<p>" . $escolha->getDescricao() . "</p>";
} else {
    $escolhacorreta = $escolhas[$acerto - 1];
    echo "<h2>Infelizmente nao era esse :(.</h2>";
    echo "<p>Dica: " . $escolhacorreta->getDescricao() . "</p>";
    echo "<p>Era o: " . $escolhacorreta->getNome() . "</p>";
    echo "<img src='" . $escolhacorreta->getImagem() . "' alt='Imagem borrada' width='250' style='filter: blur(2px);'>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <style>
        body {
  background-color: #a0b4c4; 
  
  
}
    </style>
    <br>
<ul>
        <li><a href="execucao.php?palpite=1">MACACO BANANA BANANA MACACO(famoso por roubar todas as banans que ve)</a></li>
        <li><a href="execucao.php?palpite=2">DAVI BRITO</a></li>
        <li><a href="execucao.php?palpite=3">Samuel fereira younis</a></li>
    </ul>
    <br>
    <li><a href="index.php">Volte ao inicio </a></li>
</body>
</html>