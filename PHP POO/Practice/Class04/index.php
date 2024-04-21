<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 04 - PHP POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Pen.php';
            
            $p1 = new Pen("BIC", "Blue", 0.5);
            $p2 = new Pen("Compactor", "Blue", 0.7);
            
            print_r($p1);
            print_r($p2);
        ?>
        </pre>
    </body>
</html>
