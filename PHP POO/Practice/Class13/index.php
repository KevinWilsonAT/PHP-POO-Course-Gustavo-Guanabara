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
        <?php
            require_once './Mammal.php';
            require_once './Wolf.php';
            require_once './Dog.php';
            
            $m = new Mammal();
            $m->makeSound();
            
            $w = new Wolf();
            $w->makeSound();
            
            $d = new Dog();
            $d->makeSound();
            
            $d->reactPhrase("Here's your food");
            $d->reactPhrase("DON'T BARK!");
            $d->reactTime(11);
            $d->reactTime(21);
            $d->reactOwner(true);
            $d->reactOwner(false);
            $d->reactAgeWeight(2, 2.5);
            $d->reactAgeWeight(2, 12.6);        
            $d->reactAgeWeight(17, 2);
            $d->reactAgeWeight(17, 4.5);
        ?>
    </body>
</html>
