<?php

class Task{
    public $title;
    public $description;

    public function __construct($myTitle,$myDescription){
        $this->title        =   $myTitle;
        $this->description  =   $myDescription;
    }
}

$task   =   new Task('This is a Title', 'this ia s description text.');
var_dump($task->title);