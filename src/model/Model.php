<?php

class Model {

    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function createTask($text) {
        // This is the only point where we can see business-logic:
        // A new Task gets an actual timestamp.
        // The id is ignored by the MySQL-Database,
        // because it's auto_increment.
        $task = new Task(-1, date('Y-m-d H:i:s'), $text);
        $this->database->createTask($task);
    }

    public function getTaskList() {
        $taskList = $this->database->getTaskList();
        return $taskList;
    }

    public function updateTask($task) {
        $this->database->updateTask($task);
    }

    public function deleteTask($id) {
        $this->database->deleteTask($id);
    }
}
