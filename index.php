<!doctype html>
    <html lang="pt-br">
            <head>
                    <title> Sorteio Dolphins </title>
                    <meta charset="utf-8">
                    <link rel="stylesheet" href="estilosorteio.css">
                    <link rel="icon" href="miami.png">
            </head>

            <body>
            <img src="miami.png">
            <div id="geral">
            <center> <h1> Show do Bilhão </h1></center>
            <center><div id="formulario">
            <h2> Números Sorteados </h2>
            <form action="index.php" method="post">
            <input type="submit" value="SORTEAR" id="btn" name="sorteio">
            </form>
			
            <?php

            if(isset($_POST["sorteio"])){
            ?>

            <div id="notas">
                
                    <?php
                    $numeros = array();
                    for($cont = 0; $cont <=9; $cont += 1){
                        echo "<div id='sorte'>" . $numeros[$cont] = rand(0,10) . "</div>";

                    }
                    ?>
                </center>
                </div>
                <?php
            }
            ?>
                </div>
            </body>
    </html>