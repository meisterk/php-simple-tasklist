<?php
require 'Task.php';

class Database {
    public function getTaskList(){
        return array(
            new Task(0, '2016-03-05 21:54:01', 'Das ist der erste Task'),
            new Task(1, '2016-03-05 21:56:01', 'Das ist der zweite Task'));
    }
}
