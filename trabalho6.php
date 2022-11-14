<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Atividade 6</title>
    <link rel="stylesheet" href="style6.css" type="text/css">

    <?php 
     $Pa = 0;
     $Pb = 0;
     $Ta = 0;
     $Tb = 0;

    $Pa = $_GET ['PA'];
    $Pb = $_GET ['PB'];
    $Ta = $_GET ['TA'];
    $Tb = $_GET ['TB'];

    if ($Ta < $Tb) {
        echo ("Taxa de natalidade do pais A é menor que Taxa do pais B");
    }

    $taxa1 = $Ta * 0.01;
    $taxa2 = $Tb * 0.01;
    $valor = 1;

    while ($Pa < $Pb) {
        $holderA = $Pa * $taxa1;
        $Pa = $Pa + $holderA;  

        $holderB = $Pb * $taxa2;
        $Pb = $Pb + $holderB;  
        
        $valor++;
    }

    echo ("São necessarios ". $valor. "anos para que o pais A ultrapasase o pais B em população" );
    ?>


</head>
<body>
    <main>
        <hgroup><h2>Atividade 6</h2></hgroup>

        <form method="$_GET">

                <P>Ensira a população e taxa de natalidade dos povos A e B</P>

                <span>povo A</span><br>
                <input type="number" placeholder="população" name="PA"><br>
                <input type="text" placeholder="taxa de natalidade" name="TA"><br>
                <span>povo B</span><br>
                <input type="number" placeholder="população" name="PB"><br>
                <input type="text" placeholder="taxa de natalidade" name="TB"><br><br><br>
                <input type="submit" value="enviar">

        </form>

    </main>
</body>
</html>