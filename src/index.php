<?php require 'ListView.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Simple PHP Tasklist</title>
    </head>
    <body>
        <h1>Simple PHP Tasklist</h1>
        <?php
        $view = new ListView();
        $taskList = $view->getTasks();
        echo $taskList;
        ?>
    </body>        
</html>
