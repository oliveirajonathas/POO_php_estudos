<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = New Caneta;
            $c1->cor = "Azul";
            $c1->ponta = 0.5;  
            $c2 = New Caneta;
            $c2->cor = "Verde";
            $c2->ponta = 0.7;
           
            print_r($c1);
            echo "<br>";
            print_r($c2);
            
            $c1->destampar();
            $c2->tampar();
        ?>
    </body>
</html>
