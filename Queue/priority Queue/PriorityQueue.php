<?php

include("ListNode.php");
class PriorityQueue{
    private $totalNode = 0;
    private $firstNode = NULL;
    private $previous = NULL;

    public function enqueue($data = NULL, $priority = NULL){
        $listNode = new ListNode($data, $priority);
        $this->totalNode++;

        if($this->firstNode === NULL){
            $this->firstNode = &$listNode;
        }else{
            $previous = $this->firstNode;
            $currentNode = $this->firstNode;
            while($currentNode->priority < $priority){
                if ($currentNode->priority < $priority) { 
                    if ($currentNode == $this->firstNode) { 
                            $previous = $this->firstNode; 
                            $this->firstNode = $listNode; 
                            $listNode->next = $previous; 
                            return; 
                    } 
                    $listNode->next = $currentNode; 
                    $previous->next = $listNode; 
                    return;
                } 
                $previous = $currentNode; 
                $currentNode = $currentNode->next; 
            }
        }
    }

    public function display(){
        echo "Total Nodes: " .$this -> totalNode . "\n";
        $currentNode = $this -> firstNode;
        while($currentNode != NULL){
            echo $currentNode -> data . "\n" ;
            $currentNode = $currentNode -> next;
        }
    }

}

$priorityQueue = new PriorityQueue(10);
$priorityQueue->enqueue("Adam", 1);
$priorityQueue->enqueue("kris", 8);
$priorityQueue->enqueue("morris", 2);
$priorityQueue->enqueue("gill", 8);

$priorityQueue->display();




?>