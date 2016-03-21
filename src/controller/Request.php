<?php

interface Request {

    public function getCommand();

    public function getText();

    public function getId();
}
