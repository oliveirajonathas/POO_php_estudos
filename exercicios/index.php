<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            $caneta1 = New Caneta ('Bic', 'Vermelho', true);
            $caneta2 = New Caneta ('Pentel', 'Preta', true);
            print_r($caneta1);
            print_r($caneta2);
        ?>
        </pre>
    </body>
</html>
