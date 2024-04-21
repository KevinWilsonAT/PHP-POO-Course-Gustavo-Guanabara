<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Class 06 - PHP POO</title>
    </head>
    <body>
        <h1>Remote Control Project</h1>
        <pre>
        <?php
            require_once './RemoteControl.php';
            
            $rc = new RemoteControl();
            $rc->turnOn();
            $rc->openMenu();
            $rc->moreVolume();
            $rc->openMenu();
            
        ?>
        </pre>
    </body>
</html>
