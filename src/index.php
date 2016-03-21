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
        require 'database/MySQLDatabase.php';
        $database = new MySQLDatabase();

        require 'model/Model.php';
        $model = new Model($database);

        require 'view/ListView.php';
        $view = new ListView($model);

        // print Task as List
        $taskList = $view->getTasks();
        echo $taskList;
        ?>
    </body>        
</html>
