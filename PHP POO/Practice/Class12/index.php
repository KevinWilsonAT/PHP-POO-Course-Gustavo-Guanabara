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
        
        require_once './Animal.php';
        require_once './Bird.php';
        require_once './Fish.php';
        require_once './Mammal.php';
        require_once './Reptile.php';
        require_once './Dog.php';
        require_once './Goldfish.php';
        require_once './Kangaroo.php';
        require_once './Parrot.php';
        require_once './Snake.php';
        require_once './Turtle.php';
        
        // Animal types

        $b = new Bird();
        echo "<p> Animal: Bird </p>";
        $b->setWeight(4);
        $b->setAge(1);
        $b->setMembers(4);
        $b->setFeatherColor("Black");
        echo $b->toString();
        echo $b->getFeatherColor();
        $b->move();
        $b->feed();
        $b->makeSound();
        $b->makeNest();
        
        echo "<hr>";
        
        $m = new Mammal();
        echo "<p> Animal: Mammal </p>";
        $m->setWeight(4);
        $m->setAge(1);
        $m->setMembers(4);
        $m->setFurColor("Black");
        echo $m->toString();
        echo $m->getFurColor();
        $m->move();
        $m->feed();
        $m->makeSound();
        
        echo "<hr>";
        
        $f = new Fish();
        echo "<p> Animal: Fish </p>";
        $f->setWeight(1);
        $f->setAge(1);
        $f->setMembers(5);
        $f->setScaleColor("Blue");
        echo $f->toString();
        echo $f->getScaleColor();
        $f->move();
        $f->feed();
        $f->makeSound();
        $f->makeBubbles();
        
        echo "<hr>";
        
        $r = new Reptile();
        echo "<p> Animal: Reptile </p>";
        $r->setWeight(4);
        $r->setAge(1);
        $r->setMembers(4);
        $r->setScaleColor("Brown");
        echo $r->toString();
        echo $r->getScaleColor();
        $r->move();
        $r->feed();
        $r->makeSound();
        
        echo "<hr>";
        echo "<hr>";
        
        //Animal Species
        
        $d = new Dog();
        echo "<p> Animal: Mammal / Species: Dog </p>";
        $d->setWeight(4);
        $d->setAge(1);
        $d->setMembers(4);
        $d->setFurColor("Black");
        echo $d->toString();
        echo $d->getFurColor();
        $d->move();
        $d->feed();
        $d->makeSound();
        $d->buryBone();
        $d->wagTail();
        
        echo "<hr>";
        
        $g = new Goldfish();
        echo "<p> Animal: Fish / Species: Goldfish </p>";
        $g->setWeight(1);
        $g->setAge(1);
        $g->setMembers(5);
        $g->setScaleColor("Blue");
        echo $g->toString();
        echo $g->getScaleColor();
        $g->move();
        $g->feed();
        $g->makeSound();
        $g->makeBubbles();
        
        echo "<hr>";
        
        $k = new Kangaroo();
        echo "<p> Animal: Mammal / Species: Kangaroo </p>";
        $k->setWeight(6);
        $k->setAge(1);
        $k->setMembers(4);
        $k->setFurColor("Brown");
        echo $k->toString();
        echo $k->getFurColor();
        $k->move();
        $k->feed();
        $k->makeSound();
        $k->usePouch();
        
        echo "<hr>";
        
        $p = new Parrot();
        echo "<p> Animal: Bird / Species: Parrot </p>";
        $p->setWeight(2);
        $p->setAge(1);
        $p->setMembers(4);
        $p->setFeatherColor("Green");
        echo $p->toString();
        echo $p->getFeatherColor();
        $p->move();
        $p->feed();
        $p->makeSound();
        $p->makeNest();
        
        echo "<hr>";
        
        $s = new Snake();
        echo "<p> Animal: Reptile / Species: Snake </p>";
        $s->setWeight(2);
        $s->setAge(1);
        $s->setMembers(0);
        $s->setScaleColor("Black");
        echo $s->toString();
        echo $s->getScaleColor();
        $s->move();
        $s->feed();
        $s->makeSound();
        
        echo "<hr>";
        
        $t = new Turtle();
        echo "<p> Animal: Reptile / Species: Turtle </p>";
        $t->setWeight(2);
        $t->setAge(15);
        $t->setMembers(4);
        $t->setScaleColor("Brown");
        echo $t->toString();
        echo $t->getScaleColor();
        $t->move();
        $t->feed();
        $t->makeSound();
        $t->hide();
        ?>
    </body>
</html>
