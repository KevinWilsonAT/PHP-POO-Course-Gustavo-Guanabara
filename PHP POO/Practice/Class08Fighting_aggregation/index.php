<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once './Fighter.php';
            require_once './Fight.php';
            
            $f = array();
            
            $f[0] = new Fighter("Karl", "France", 30, 1.75, 60.9, 11, 2, 1);
            $f[1] = new Fighter("José", "Brazil", 29, 1.68, 57.8, 14, 2, 3);
            $f[2] = new Fighter("Chris", "USA", 35, 1.65, 80.9, 12, 2, 1);
            $f[3] = new Fighter("Matt", "Australia", 28, 1.93, 81.6, 13, 0, 2);
            $f[4] = new Fighter("Yuuki", "Japan", 37, 1.70, 119.3, 5, 4, 3);
            $f[5] = new Fighter("Charles", "UK", 30, 1.81, 105.7, 12, 2, 4);
            
            $UFC_Fight01 = new Fight();
            $UFC_Fight01->setFight($f[rand(0,5)], $f[rand(0,5)]);
            $UFC_Fight01->fight();
        ?>
    </body>
</html>
