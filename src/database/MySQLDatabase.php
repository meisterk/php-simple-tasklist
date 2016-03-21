<?php

require 'Database.php';
require ( __DIR__ . '/../model/Task.php');

class MySQLDatabase implements Database {

    private $db;

    public function __construct() {
        // create connection to database
        $user = 'root';
        $password = 'mysql';
        $this->db = new PDO('mysql:host=localhost;dbname=tasklist', $user, $password);
    }

    public function createTask(Task $task) {
        // The id of the task is ignored
        // id should be set by MySQL per auto_increment
        $stmt = $this->db->prepare(
                "INSERT INTO task (timestamp, text)" .
                " VALUES (:timestamp, :text)");

        $stmt->bindParam(':timestamp', $timestamp);
        $stmt->bindParam(':text', $text);

        $timestamp = $task->getTimestamp();
        $text = $task->getText();
        $stmt->execute();
    }

    public function getTaskList() {

        // the table is saved in an array
        $tasklist = array();

        // read data from table
        $sql = 'SELECT * FROM task';
        foreach ($this->db->query($sql) as $zeile) {
            $id = $zeile['id'];
            $timestamp = $zeile['timestamp'];
            $text = $zeile['text'];
            $task = new Task($id, $timestamp, $text);
            array_push($tasklist, $task);
        }

        // return array of Task-instances
        return $tasklist;
    }

    public function updateTask(Task $task) {
        $sql = "UPDATE task SET timestamp=:timestamp, text=:text WHERE id=:id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':timestamp', $timestamp);
        $stmt->bindParam(':text', $text);
        $stmt->bindParam(':id', $id);

        $timestamp = $task->getTimestamp();
        $text = $task->getText();
        $id = $task->getId();

        $stmt->execute();
    }

    public function deleteTask($id) {
        $sql = "DELETE FROM task WHERE id=:id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();
    }

}
