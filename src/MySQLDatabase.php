<?php

require 'Database.php';
require 'Task.php';

class MySQLDatabase implements Database {

    public function getTaskList() {
        // create connection to database
        $user = 'root';
        $password = '';
        $db = new PDO('mysql:host=localhost;dbname=tasklist', $user, $password);

        // the table is saved in an array
        $tasklist = array();
        
        // read data from table
        $sql = 'SELECT * FROM task';
        foreach ($db->query($sql) as $zeile) {
            $id = $zeile['id'];
            $timestamp = $zeile['timestamp'];
            $text = $zeile['text'];
            $task = new Task($id, $timestamp, $text);
            array_push($tasklist, $task);
        }
        
        // return array of Task-instances
        return $tasklist;
    }

}
