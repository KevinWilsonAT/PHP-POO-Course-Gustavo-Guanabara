<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 05 - PHP POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once './BankAccount.php';
            
            $p1 = new BankAccount();
            $p2 = new BankAccount();
            
            $p1->openAccount("CA");
            $p1->setAccountNum(1111);
            $p1->setOwner("A1");
            
            $p2->openAccount("SA");
            $p2->setAccountNum(2222 );
            $p2->setOwner("A2");
            
            $p1->deposit(300);
            $p2->deposit(500);
            
            $p1->withdraw(100);
            
            $p1->payMonth();
            $p2->payMonth();
            
            $p1->withdraw(238);
            $p2->withdraw(630);
            
            $p1->closeAccount();
            $p2->closeAccount();
            
            print_r($p1);
            print_r($p2);
        ?>
        </pre>
    </body>
</html>
