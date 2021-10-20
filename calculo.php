<?php

$mensagem = '';

if ($_POST) {

 $distancia = $_POST['distancia'];
 $autonomia = $_POST['autonomia'];

 if (is_numeric($distancia) && is_numeric($autonomia)) {

  if ($distancia > 0 && $autonomia > 0) {

   $valorGasolina = 6.10;
   $valorAlcool = 3.80;
   $valorDiesel = 3.90;

   $calculoGasolina = ($distancia / $autonomia) * $valorGasolina;
   $calculoGasolina = number_format($calculoGasolina, 2, ',', '.');
   $calculoAlcool = ($distancia / $autonomia) * $valorAlcool;
   $calculoAlcool = number_format($calculoAlcool, 2, ',', '.');
   $calculoDiesel = ($distancia / $autonomia) * $valorDiesel;
   $calculoDiesel = number_format($calculoDiesel, 2, ',', '.');

   $mensagem .= "<div class='sucesso'>";
   $mensagem .= "<p>O valor total será de: </p>";
   $mensagem .= "<ul>";
   $mensagem .= "<li>O valor do consumo em R$ para Gasolina foi de: R$" . $calculoGasolina . "</li>";
   $mensagem .= "<li>O valor do consumo em R$ para Álcool foi de: R$" . $calculoAlcool . "</li>";
   $mensagem .= "<li>O valor do consumo em R$ para Diesel foi de: R$" . $calculoDiesel . "</li>";
   $mensagem .= "</ul>";
   $mensagem .= "</div>";
  } else {
   $mensagem .= "<div class='erro'>";
   $mensagem .= "<p> O valor da distância e da autonomia devem ser maior que 0.</p>";
   $mensagem .= "</div>";
  }
 } else {
  $mensagem .= "<p> O valor recebido não é númerico. </p>";
 }

} else {
 echo "<p> Nenhum dado foi recebido pelo formulário.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de consumo de combustível</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Resultado do cálculo de consumo</h2>
            <div class="conteudo-painel">
                <?php
echo $mensagem;
?>
                <a class="botao" href="index.php">Voltar </a>
            </div>
        </div>
    </main>
</body>
</html>