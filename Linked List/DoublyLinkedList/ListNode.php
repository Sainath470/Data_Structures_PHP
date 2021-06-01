<?php
class ListNode {
    /**
     * doubly linked list has three attributes in nodes
     *
     * @var $data  to store the data
     * @var $next to point towards next node
     * @var $previous to point towards the previous node
     */
    public $data;
    public $next;
    public $previous;

    /**
     * initializing the object when created and passing data
     *
     * @param $data will be initialized to the data in the node
     */
    public function __construct($data){
        $this -> data = $data;
    }
}

?>