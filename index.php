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
            <h2>Instruções</h2>

            <div class="conteudo-painel">
                <p>Esta aplicação tem como finalidade demonstrar os valores que serão gastos com combustível durante uma
                    viagem,
                    com
                    base no consumo do seu veículo, e com a distância determinada por você!</p>

                <p>Os combustíveis disponíveis para este cálculo são:</p>

                <ul>
                    <li>Álcool</li>
                    <li>Diesel</li>
                    <li>Gasolina</li>
                </ul>
            </div>

        </div>
        <div class="painel">
            <h2>Cálculo do valor (R$) do consumo</h2>
            <div class="conteudo-painel">
                <form action="calculo.php" method="POST">
                    <label for="distancia">Distância em KM a ser percorrida</label>
                    <input class="campoTexto" type="number" name="distancia" required />

                    <label for="autonomia">Consumo de combustível do veículo (Km/L) </label>
                    <input class="campoTexto" type="number" name="autonomia" required>

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>