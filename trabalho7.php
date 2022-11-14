<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Atividade 7</title>

    <?php 
    $valor1 = $_GET ["A"];
    $valor2 = $_GET ["B"];
     
    if (($valor1 = "") || ($valor2 = "")){
        echo ("Ensira um valor valido");
        }

        if ($valor1 > $valor2){
            $start = $valor1;
            } else {        
                $start = $valor2;
                $valor2 = $valor1;
            }

    while ($start < $valor2){
            $start = $start + 1;
            echo $start;
        } 
       
    ?>
</head>
<body>

<hgroup><h2>Atividade 7</h2></hgroup>

<form method="get">

    <input type="number" placeholder="Valor A" name="A">
    <input type="number" placeholder="Valor B" name="B">
    <input type="submit">
    <p><?=$start?></p>
    
</form>
    
</body>
</html>