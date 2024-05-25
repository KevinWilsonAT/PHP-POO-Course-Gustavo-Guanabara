<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
         require_once './Video.php';
         require_once './Pupil.php';
        
        $v[0] = new Video("OOP Class #1");
        $v[1] = new Video("PHP Class #12");
        $v[2] = new Video("HTML5 Class #10");
        
        print_r($v);
        
        $p[0] = new Pupil("Jubilee", 22, "F", "Juby");
        $p[1] = new Pupil("Creuse", 12, "F", "Crew");
        
        print_r($p);
        ?>
        </pre>
    </body>
</html>
