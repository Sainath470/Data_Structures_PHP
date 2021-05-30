<?php 

include("ListNode.php");
class LinkedList{

    private $firstNode = NULL;
    private $totalNode = 0;

    public function insert($data = NULL){
        $newNode = new ListNode($data);

        if($this -> firstNode === NULL){
            $this -> firstNode = &$newNode;
        }else{
            $currentNode = $this -> firstNode;
            while($currentNode -> next != NULL){
                $currentNode = $currentNode -> next;
            }
            $currentNode -> next = $newNode;
        }
        $this -> totalNode++;
       
    }


    public function display(){
        echo "Total Nodes: " .$this -> totalNode . "\n";
        $currentNode = $this -> firstNode;
        while($currentNode != NULL){
            echo $currentNode -> data . " " ;
            $currentNode = $currentNode -> next;
        }
    }
    
    public function deleteFirst(){
        if($this-> firstNode != NULL){
            if($this->firstNode->next != NULL){
                $this->firstNode = $this->firstNode->next;
            }else{
                $this->firstNode = NULL;
            }
            $this->totalNode--;
            return TRUE;
        }
        // return FALSE;
    }
}

$linkedList = new LinkedList();
$linkedList->insert(10);
$linkedList->insert(20);
$linkedList->insert(30);
$linkedList->insert(40);

$linkedList->deleteFirst(20);
$linkedList->display();




?>