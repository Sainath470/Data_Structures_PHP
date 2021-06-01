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

    /**
     * function to add node to the linked list
     *
     * @param $data is the input data stored in the newNode of the linked list 
     * and added to the list
     * @return void
     */
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

    /**
     * search the input element and removes the element
     * from the linked list
     *
     * @param  $element is the data that will be removed from the list
     * @return void
     */
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


    /**
     * function to count the total number of
     * nodes present in the linked list
     *
     * @return void
     */
    function countNodes(){
		$count = 0;
		$current = $this->head;
		while($current != NULL){
			$count++;
			$current = $current->next;
		}
		return $count;
	}

    /**
     * displays the entire linked list from head to tail
     * along with total number of nodes
     *
     * @return void
     */
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


    /**
     * deletes the element in the beginnig of the list
     *
     * @return void
     */
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

    /**
     * deletes the element at the end of the linked list
     *
     * @return void
     */
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

/**
 * creating object 
 */
$doublyLinkedList = new DoublyLinkedList();

/**
 * calling the addNode function through object
 */
$doublyLinkedList->addNode(10);
$doublyLinkedList->addNode(12);
$doublyLinkedList->addNode(13);
$doublyLinkedList->addNode(15);
$doublyLinkedList->addNode(18);

$doublyLinkedList->searchAndDelete(18);

/**
 * calling the display function.
 */
$doublyLinkedList->display();




?>