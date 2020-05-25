<!DOCTYPE html> 
    <head> 
        <meta charset="utf-8"/>
        <title> Exercício de quarentena - soma </title>
    </head>
    <body> 
        <form action = "exercicio.php" method="POST">
            <?php
                if(empty($_POST)){
                    echo '<input type="number" name="n1" placeholder="Digite um número:"/>+
                          <input type="number" name="n2" placeholder="Digite mais um número:"/>=
                          <input type="number" name="r" readonly="readonly"/>
                          <p><input type="submit" value="Somar"/></p>';
                }else{
                    $n1 = $_POST["n1"];
                    $n2 = $_POST["n2"];
                    $r = $n1 + $n2;
                    echo '<input type="number" name="n1" placeholder="Digite um número:" value="'.$n1.'"/> +
                          <input type="number" name="n2" placeholder="Digite mais um número:" value="'.$n2.'"/> =
                          <input type="number" name="r" readonly="readonly" value="'.$r.'"/>
                          <p><input type="submit" value="Somar"/></p>';
                }
            ?>
        </form>
    </body>
</html>