<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Atividade 2</title>

    <?php
    $nota1 = $_GET ["nota1"];
    $nota2 = $_GET ["nota2"];

    $media =  ($nota1 + $nota2) / 2;

    if ($media > 7) 
    $resultado = "Aprovado";
    else 
    $resultado = "Reprovado";
    

    ?>
</head>
<body>
    <main>
        <div>
            <form action="" method="get">

                <h4>Digite as notas</h4>
                <br>
                <br>
                <span>NOTA 1</span><br>
                <input type="number" name="nota1" value="nota 2" max="10" min="0"><br>
                <span>NOTA 2</span><br>
                <input type="number" name="nota2" value="nota 1" max="10" min="0">
                <br>
                <input type="submit" name="calculo" value="calcular" >
                <br>
                <?php echo "A média é $media" ?>
                <br>
                <?php echo "$resultado" ?>


            </form>
        </div>
    </main>
</body>
</html>