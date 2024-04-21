<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 02 - PHP POO</title>
    </head>
    <body>
        <?php
            require_once './Pen.php';
            
            $p1 = new Pen;
            $p1->color = 'Blue';
            $p1->tip = 0.5;            
            $p1->cover();
            print_r($p1);
            echo'<br>';
            $p2 = new Pen;
            $p2->color = 'Green';
            $p2->charge = 50;            
            $p2->cover();
            print_r($p2);
        ?>
    </body>
</html>
