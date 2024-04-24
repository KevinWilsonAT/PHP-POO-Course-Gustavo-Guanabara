<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 09</title>
    </head>
    <body>
        <pre>
            
        <?php
            
            require_once './Person.php';
            require_once './Book.php';
        
            $p[0] = new Person("Peter", 22, "M");
            $p[1] = new Person("Mary", 25, "F");
            
            $b[0] = new Book("PHP POO #1", "Joseph", 150, $p[0]);
            $b[1] = new Book("PHP POO #2", "Matt", 250, $p[1]);
            $b[2] = new Book("PHPPOO #3", "John", 200, $p[0]);

            $b[0]->open();
            $b[0]->browse(200);
            $b[0]->nextPage();
            $b[0]->details();
            echo "<br>";
            $b[1]->details();
        ?>
        </pre>
    </body>
</html>
