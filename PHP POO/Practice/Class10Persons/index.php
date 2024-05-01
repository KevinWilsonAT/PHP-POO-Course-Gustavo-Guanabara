<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 010</title>
    </head>
    <body>
        <pre>
            
        <?php
            
            require_once './Person.php';
            require_once './Student.php';
            require_once './Teacher.php';
            require_once './Employee.php';
        
            $p1 = new Person();
            $p2 = new Student();
            $p3 = new Teacher();
            $p4 = new Employee();
            
            
            $p1->setName("Peter");
            $p2->setName("Mary");
            $p3->setName("Claude");
            $p4->setName("Phaby");
            
            $p2->setCourse("IT");
            $p3->setSalary(2500.75);
            $p4->setSector("Stock");
            
            $p3->receiveAug(550.20);
            $p4->changeWork();
            $p2->cancelReg();
        ?>
        </pre>
    </body>
</html>
