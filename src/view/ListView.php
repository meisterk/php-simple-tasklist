<?php

require 'View.php';

class ListView implements View {

    public function sendHTTPResponse(array $taskList) {
        $htmlList = '<ul>';
        foreach ($taskList as $task) {
            $htmlList = $htmlList . '<li>' . $task->getText() . '</li>';
        }
        $htmlList = $htmlList . '</ul>';
        echo $htmlList;
    }

}
