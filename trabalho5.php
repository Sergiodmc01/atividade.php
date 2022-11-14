<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style5.css" type="text/css">
    <title>atividade 5</title>

</head>

<body>
    <hgroup>
        <h2>Atividade 5</h2>
    </hgroup>
    <main class="main">
    <form method="get" class="form">
        <span>Ensira seu nome</span>
        <input type="text" name="nome" class="input">
        <br>
        <span>Esnira sua idade</span>
        <input type="text" name="idade"class="input">
        <br>
        <span>Ensira seu salario</span>
        <input type="number" name="salario"class="input">
        <br>
        <span>Estado civil</span>
        <input type="text" name="estadoC"class="input">
        <br>
        <span>Sexo</span>
        <input type="text" name="sexo"class="input">
        <br>
        <input value="enviar" type="submit"class="input">
        <br><br>

    </form>
    </main>

    <div class="gabarito">

    </div>

    <?php 
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $salario = $_GET["salario"];
        $estadoC = $_GET["estadoC"];
        $sexo = $_GET["sexo"];    
    
        if ($nome == "") {
            echo (" *Nome é um campo obrigatório* ");
        } elseif (strlen($nome) <= 3) {
            echo (" *Nome deve ter ao menos 4 caracteres.* ");
        }

        if ($idade == "") {
            echo (" *Idade é um campo obrigatório* ");
        } elseif (($idade < 0) || ($idade > 150)) {
            echo (" *Idade invalida* ");
        }


        if (($salario == "") || ($salario <= 0)) {
            echo (" *Salario invalido* ");
        }
    
        if ($estadoC == "") {
            echo (" *Estado Civil é um campo obrigatório* ");
        }   elseif (($estadoC == "C") || ($estadoC == "c")) { 
            }   elseif (($estadoC == "S") || ($estadoC == "s")) {
                }   elseif (($estadoC == "V") || ($estadoC == "v")) {
                    }   elseif (($estadoC == "D") || ($estadoC == "d")) {
                        }   else  {echo " *Estado civil invalido* ";
        };

        if (($sexo == "")) {
            echo (" *Sexo é um campo obrigatório* ");
        }   elseif (($sexo == "F") || ($sexo == "f")) {
            }  elseif (($sexo == "M") || ($sexo == "m")) {
                } else { echo " *Sexo invalido* ";
        }

    ?>

</body>

</html>