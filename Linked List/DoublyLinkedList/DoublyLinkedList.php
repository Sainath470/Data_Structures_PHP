<?php
include("ListNode.php");
class DoublyLinkedList {
    private $firstNode = NULL;
    private $lastNode = NULL;
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
        return TRUE;
    }


    public function display(){
        echo "\nTotal Nodes: " .$this -> totalNode . "\n";
        $currentNode = $this -> firstNode;
        while($currentNode != NULL){
            echo $currentNode -> data . " ";
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
        return FALSE;
    }

    public function deleteLast(){
        if($this-> firstNode!= NULL){
            $currentNode = $this->firstNode;
            if($currentNode->next === Null){
                $this->firstNode = NULL;
            }else{
                $previous = NULL;

                while($currentNode->next != NULL){
                    $previous = $currentNode;
                    $currentNode = $currentNode->next;
                }

                $previous->next =NULL;
                $this->totalNode--;
                return TRUE;
            }
        }
        return FALSE;
    }

  
}

$doublyLinkedList = new DoublyLinkedList();
$doublyLinkedList->insert(10);
$doublyLinkedList->insert(12);
$doublyLinkedList->insert(13);

$doublyLinkedList->display();
$doublyLinkedList->deleteLast();
$doublyLinkedList->display();
$doublyLinkedList->deleteFirst();
$doublyLinkedList->display();




?>