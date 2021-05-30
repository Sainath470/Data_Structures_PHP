<?php
class ListNode {
    public $data = NULL;
    public $next = NULL;
    public $previous = NULL;

    public function __construct($data = NULL){
        $this -> data = $data;
    }
}

?>