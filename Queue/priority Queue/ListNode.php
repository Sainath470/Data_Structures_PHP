<?php

class ListNode{
    public $data = NULL;
    public $next = NULL;
    public $priority = NULL;


    function __construct($data, $priority){
        $this->data = $data;
        $this->priority = $priority;
    }
}


?>