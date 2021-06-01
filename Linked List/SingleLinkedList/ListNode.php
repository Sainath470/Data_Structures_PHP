<?php
class ListNode{
    /**
     * global variables declared 
     *
     * @var $data contains the data 
     * @var $next contains the pointer pointing to the next node's data
     */
    public $data = NULL;
    public $next = NULL;

    public function __construct($data){
        $this-> data = $data;
        $this->next = NULL;
    }
}


?>