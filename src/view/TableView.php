<?php

require 'View.php';

class TableView implements View {

    public function sendHTTPResponse(array $taskList) {
        echo $this->getTasksAsHTMLTable($taskList) . $this->getNewForm();
    }

    private function getTasksAsHTMLTable(array $taskList) {
        $htmlList = '<table class="pure-table pure-table-bordered">';
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
                '<input type="submit" value="Delete" class="pure-button">' .
                '</form>';
        return $html;
    }

    private function getNewForm() {
        $html = '<form class="pure-form">' .
                '<input type="hidden" name="cmd" value="create">' .
                '<input type="text" name="text" value="New Task">' .
                '<input type="submit" value="New Task" class="pure-button">' .
                '</form>';
        return $html;
    }

}
