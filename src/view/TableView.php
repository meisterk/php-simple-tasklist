<?php

require 'View.php';

class TableView implements View {

    private $model;

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function sendHTTPResponse() {
        echo $this->getTasksAsHTMLTable() . $this->getNewForm();
    }

    private function getTasksAsHTMLTable() {
        $htmlList = '<table>';
        $taskList = $this->model->getTaskList();
        foreach ($taskList as $task) {
            $htmlList = $htmlList .
                    '<tr>' .
                    '<td>' . $task->getTimestamp() . '</td>' .
                    '<td>' . $task->getText() . '</td>' .
                    '<td>' . $this->getDeleteButton($task->getID()) . '</td>' .
                    '</tr>';
        }
        $htmlList = $htmlList . '</table>';
        return $htmlList;
    }

    private function getDeleteButton($id) {
        $html = '<form>' .
                '<input type="hidden" name="cmd" value="delete">' .
                '<input type="hidden" name="id" value="' . $id . '">' .
                '<input type="submit" value="Delete">' .
                '</form>';
        return $html;
    }

    private function getNewForm() {
        $html = '<form>' .
                '<input type="hidden" name="cmd" value="create">' .
                '<input type="text" name="text" value="New Task">' .
                '<input type="submit" value="New Task">' .
                '</form>';
        return $html;
    }

}
