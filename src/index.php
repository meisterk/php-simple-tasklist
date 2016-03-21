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

        require 'controller/HTTPGETRequest.php';
        $request = new HTTPGETRequest();
        
        require 'view/TableView.php';
        $view = new TableView($model);

        require 'controller/Controller.php';
        $controller = new Controller($model, $request, $view);        
        ?>
    </body>        
</html>
