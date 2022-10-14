<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <style>

    </style>

</head>

<body>
    <main class="tudo">

        <form method="post">

            <span class="texto">primeiro numero</span>
            <input name="num1" type="number" value="<?=$num1?>>"

            <span class="texto">segundo numero</span>
            <input name="num2" type="number" value="<?=$num2?>">

            <span>operação</span>
            <select name="" id="">
                <option name="mult" value="mult" <?=($calcular=='mult')?'Selected':''; ?>>multiplicação</option>
                <option name="div" value="div" <?=($calcular=='div')?'Selected':''; ?>>divisão</option>
                <option name="soma" value="soma" <?=($calcular=='soma')?'Selected':''; ?>>soma</option>
                <option name="sub" value="sub" <?=($calcular=='sub')?'Selected':''; ?>>subtração</option>
            </select>

            <button name="calcular">Calcular</button>

            <div class="box">
            </div>
        </form>
    </main>
</body>

</html>

<?php 
    $num1 = 0;
    $num2 = 0;
    $resultado = 0;
    $calcular ='somar';

if (isset($_GET['num1'], $_GET['num2'], $_GET['calcular'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $calcular = $_GET[''];
  }
  switch($calcular){
    case 'soma';
        $resultado = $num1 + $num2 ;
    break;

    case 'sub';
        $resultado = $num1 - $num2 ;
    break;

    case 'mult';
        $resultado = $num1 * $num2 ;
    break;

    case 'div';
        $resultado = $num1 / $num2 ;
    break;

  }

  echo ("O reultado é : $resultado ");

?>