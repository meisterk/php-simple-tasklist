<?php

require 'Request.php';

class HTTPGETRequest implements Request {

    public function getCommand() {
        $cmd = '';
        if (isset($_GET['cmd'])) {
            switch ($_GET['cmd']) {
                case 'create':
                    $cmd = 'create';
                    break;
                case 'update':
                    $cmd = 'update';
                    break;
                case 'delete':
                    $cmd = 'delete';
                    break;
            }
        }
        return $cmd;
    }

    public function getId() {
        $id = -1;
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }
        return $id;
    }

    public function getText() {
        $text = '';
        if(isset($_GET['text'])){
            $text=$_GET['text'];
        }
        return $text;
    }

}
