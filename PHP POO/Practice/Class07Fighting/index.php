<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once './Fighter.php';
            
            $f = array();
            
            $f[0] = new Fighter("Player1", "France", 30, 1.75, 90.9, 11, 2, 1);
            $f[1] = new Fighter("Player2", "Brazil", 29, 1.68, 57.8, 14, 2, 3);
            $f[2] = new Fighter("Player3", "USA", 35, 1.65, 80.9, 12, 2, 1);
            $f[3] = new Fighter("Player4", "Australia", 28, 1.93, 81.6, 13, 0, 2);
            $f[4] = new Fighter("Player5", "Japan", 37, 1.70, 119.3, 5, 4, 3);
            $f[5] = new Fighter("Player6", "UK", 30, 1.81, 105.7, 12, 2, 4);
            
            $f[0]->status();
            $f[0]->display();
        ?>
    </body>
</html>
