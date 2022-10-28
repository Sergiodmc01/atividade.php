<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Atividade 1</title>

    <?php 
    $inputValor = $_GET['inputValor'];

    $vogais = [
        "a",
        "A",
        "e",
        "E",
        "i",
        "I",
        "o",
        "O",
        "u",
        "U"
    ];

    $numericos = [
        "1",
        "2",
        "3",
        "4",
        "5",
        "6",
        "7",
        "8",
        "9",
        "0"
    ];


    if ($teste = in_array ($inputValor, $vogais))
       $resultado = "Esse é um caractere vogal";
        elseif ($teste = in_array ($inputValor, $numericos) )
                $resultado = "Esse é um numerio";
                else 
                $resultado = 'Esse um caractere consoante';

?>

</head>

<body>
    <header>

    </header>
    <main>
        <div>
            <form action="" method="GET" name="form">

                <span>Digite no campo abaixo</span>
                <input type="text" name="inputValor">
                <input type="submit" name="submit" value="Testar">
                <?php echo "O resultado é $resultado" ?>


            </form>

        </div>

    </main>
</body>

</html>