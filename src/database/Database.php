<?php

interface Database {

    // C R U D
    // CREATE
    public function createTask(Task $task);

    // READ
    public function getTaskList();

    // UPDATE
    public function updateTask(Task $task);

    // DELETE
    public function deleteTask(Task $task);
}
