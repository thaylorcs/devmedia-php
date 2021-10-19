<?php

$distancia = $_POST['distancia'];
$autonomia = $_POST['autonomia'];

$valorGasolina = 4.80;
$valorAlcool = 3.80;
$valorDiesel = 3.90;

$calculoGasolina = ($distancia / $autonomia) * $valorGasolina;
$calculoAlcool = ($distancia / $autonomia) * $valorAlcool;
$calculoDiesel = ($distancia / $autonomia) * $valorDiesel;

echo "<p>O valor do consumo em R$ para Gasolina foi de: R$" .$calculoGasolina."</p>";
echo "<p>O valor do consumo em R$ para Álcool foi de: R$" .$calculoAlcool."</p>";
echo "<p>O valor do consumo em R$ para Álcool foi de: R$" .$calculoDiesel."</p>";