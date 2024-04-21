<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 03 - PHP POO</title>
    </head>
    <body>
        <pre>            
        <?php
            require_once './Pen.php';
            
            $p1 = new Pen; 
            $p1->model = 'BIC Crystal';
            $p1->color = 'Blue';
            var_dump($p1);
           $p1->draw(); 
        ?>
        </pre>
    </body>
</html>
