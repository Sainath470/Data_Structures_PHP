<?php
include("ListNode.php");
class DoublyLinkedList {
    private $head;
    private $tail;
    private $totalNode = 0;

    function __construct(){
        $this->head = NULL;
        $this->tail = NULL;
    }

    public function addNode($data){
        $newNode = new ListNode($data);

        if($this->head == NULL){
            $this->head = $this->tail = $newNode;
            $this->head->pre = NULL;
            $this->tail->next = NULL;
            $this->totalNode++;
        }else{
            $this->tail->next = $newNode;
            $newNode->pre = $this->tail;
            $this->tail = $newNode;
            $this->tail->next = NULL;
            $this->totalNode++;
        }

    }

    function searchAndDelete($element){
        $current = $this->head;
        if($current != NULL && $current->data == $element){
            $this->head = $current->next;
            return;
        }

        while($current != NULL && $current->data != $element){
			$pre = $current;
			$current = $current->next;
		}
		if($current == NULL){
			echo "$element is not present in the list \n";
			return;
		}
		
		$temp = $current->data;
		$pre->next = $current->next;
		echo $temp . " has succesfully deleted from the list\n";
    }


    function countNodes(){
		$count = 0;
		$current = $this->head;
		while($current != NULL){
			$count++;
			$current = $current->next;
		}
		return $count;
	}

    public function display(){
        echo "Total Nodes: " .$this -> countNodes() . "\n";
        $currentNode = $this -> head;
        while($currentNode != NULL){
            echo $currentNode -> data;
            if($currentNode->next != NULL)
            echo "->";
            $currentNode = $currentNode -> next;
        }
    }

    
    public function deleteFirst(){
        if($this-> head != NULL){
            if($this->head->next != NULL){
                $this->head = $this->head->next;
            }else{
                $this->head = NULL;
            }
            $this->totalNode--;
        }
    }

    public function deleteLast(){
        if($this-> head!= NULL){
            $currentNode = $this->head;
            if($currentNode->next === Null){
                $this->head = NULL;
            }else{
                $pre = NULL;
                while($currentNode->next != NULL){
                    $pre = $currentNode;
                    $currentNode = $currentNode->next;
                }
                $pre->next =NULL;
                $this->totalNode--;
            }
        }
    }
}

$doublyLinkedList = new DoublyLinkedList();
$doublyLinkedList->addNode(10);
$doublyLinkedList->addNode(12);
$doublyLinkedList->addNode(13);
$doublyLinkedList->addNode(15);
$doublyLinkedList->addNode(18);

$doublyLinkedList->searchAndDelete(18);

$doublyLinkedList->display();




?>