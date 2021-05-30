<?php

class ListNode{
    public $data = NULL;
    public $next = NULL;
    public $priority = NULL;


    function __construct($data = NULL, $priority = NULL){
        $this->data = $data;
        $this->priority = $priority;
    }
}


?>