<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 011</title>
    </head>
    <body>
        <pre>
            
        <?php
        
        require_once './Visitor.php';
        require_once './Student.php';
        require_once './ScholarshipHolder.php';
        require_once './Teacher.php';
        require_once './Technician.php';
        
        $v1 = new Visitor();
        $v1->setName("John");
        $v1->setAge(22);
        $v1->setGender("M");
        print_r($v1);
        
        echo "<br>";
        $st1 = new Student();
        $st1->setName("Claude");
        $st1->setRegister(1111);
        $st1->setCourse("IT");
        $st1->setAge(16);
        $st1->setGender("M");
        $st1->payMonthly();
        print_r($st1);
        
        echo"<br>";
        $sh1 = new ScholarshipHolder();
        $sh1->setRegister(1112);
        $sh1->setName("Jubilee");
        $sh1->setAge(21);
        $sh1->setScholarship(12.5);
        $sh1->setGender("F");
        $sh1->payMonthly();
        print_r($sh1);
        
        echo"<br>";
        $te1 = new Teacher();
        $te1->setName("Josh");
        $te1->setAge(34);
        $te1->setGender("M");
        $te1->receiveAug(50);
        print_r($te1);
        
        echo"<br>";
        $tc1 = new Technician();
        $tc1->setName("Paul");
        $tc1->setAge(29);
        $tc1->setGender("M");
        $tc1->practice();
        $tc1->payMonthly();
        print_r($te1);
        ?>
        </pre>
    </body>
</html>
