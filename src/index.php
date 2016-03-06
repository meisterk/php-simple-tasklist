<!DOCTYPE html>
<html>
    <head>
        <title>Simple PHP Tasklist</title>
    </head>
    <body>
        <h1>Simple PHP Tasklist</h1>
        <?php
        // central point for connecting the classes
        // dependency injection
        require 'FakeDatabase.php';
        $database = new FakeDatabase();

        require 'Model.php';
        $model = new Model($database);

        require 'ListView.php';
        $view = new ListView($model);

        // print Task as List
        $taskList = $view->getTasks();
        echo $taskList;
        ?>
    </body>        
</html>
