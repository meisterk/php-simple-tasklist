<?php

class Task {
    private $id;
    private $timestamp;
    private $text;
    
    public function __construct($id, $timestamp, $text) {
        $this->id = $id;
        $this->timestamp = $timestamp;
        $this->text = $text;
    }

    public function getId() {
        return $this->id;
    }

    public function getTimestamp() {
        return $this->timestamp;
    }

    public function getText() {
        return $this->text;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }

    public function setText($text) {
        $this->text = $text;
    }
}
