<?php 

include("ListNode.php");
class SinglyLinkedList{
	/**
	 * Declaring global variables
	 */
	private $head;
	private $tail;

	/**
	 * creating constructor for initializing 
	 * head and tail 
	 */
	function __construct(){
		$this->head = NULL;
		$this-> tail = NULL;
	}

	/**
	 * insert() function take the input and inserts into node
	 * 
	 * @param  $data is the input taken when the function is called 
	 * @return void
	 */
	function insert($data){
		$newNode = new ListNode($data);
		if($this->head == NULL){
			$this->head = $newNode;
			$this->tail = $newNode;
		}
		else{
			$this->tail->next = $newNode;
			$this->tail = $newNode;
		}
	}

	/**
	 * counting number of nodes in the linked list
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
	 * function to insert node at the beginning of the linked list
	 *
	 * @param $data takes as input and adds it to the starting point of list
	 * @return void
	 */
	function insertAtFirst($data){
		$newNode = new ListNode($data);

		if($this->head == NULL){
			$this->head = $newNode;
			$this->tail = $newNode;

		}else{
			$temp = $this->head;
			$this->head = $newNode;
			$this->head->next = $temp;
		}
	}

	/**
	 * Inserts the node at the end of the linked list
	 *
	 * @param  $data is the input that will added at the end of the list
	 * @return void
	 */
	function insertAtLast($data){
		$newNode = new ListNode($data);
		if($this->head == NULL){
			$this->head = $newNode;
			$this->tail = $newNode;
		}else{
			$this->tail->next = $newNode;
			$this->tail = $newNode;
		}
	}

	/**
	 * removes the duplicate elements in the list
	 *
	 * @return void
	 */
	function removeDuplicate(){
		$current = $this->head;
		$index = null; 
		$temp = null;

		if($this->head == NULL){
			return "list is empty";
		}else{
			while($current != NULL){
				$temp = $current;
				$index = $current->next;

				while($index != NULL){
					if($current->data == $index->data){
						$temp->next = $index->next;
					}else{
						$temp = $index;
					}
					$index = $index->next;
				}
				$current = $current->next;
			}
		}
	}
	
	/**
	 * searching a data in the list and deleting it from the list.
	 *
	 * @param  $element is the input that has to be deleted from the list
	 * @return void
	 */
	function searchAndDelete($element){
		$current = $this->head;
		$previous = NULL;
		if($current != NULL && $current->data == $element){
			$this->head = $current->next;
			return;
		}
		while($current != NULL && $current->data != $element){
			$previous = $current;
			$current = $current->next;
		}
		if($current == NULL){
			echo "$element is not present in the list \n";
			return;
		}
		$temp = $current->data;
		$previous->next = $current->next;
		echo $temp . " has succesfully deleted from the list\n";
	}

	/**
	 * displaying the elements in the list
	 *
	 * @return void
	 */
	function display(){

		$current = $this->head;
		if($this->head == NULL){
			echo "List is empty\n";
			return;
		}
		echo "Total Nodes are : " . $this->countNodes() . "\n";
		echo "Single Linked List nodes are: ";
		while($current != NULL){
			if($current != NULL){
			echo $current->data ;
			if($current->next != NULL)
			echo "->";
			}
			$current = $current->next;
		}
		echo "\n";
	}

}
	
	/**
	 * creating the object of the SinglyLinkedList.
	 */
	$singlyLinkedList = new SinglyLinkedList();

	/**
	 * calling the insert() function using object
	 */
	$singlyLinkedList->insert(10);
	$singlyLinkedList->insert(20);
	$singlyLinkedList->insert(20);
	$singlyLinkedList->insert(40);
	$singlyLinkedList->insert(10);
	$singlyLinkedList->insert(70);

	$singlyLinkedList->insertAtFirst(90);
	$singlyLinkedList->insertAtLast(1);
	$singlyLinkedList->insertAtLast(2);
	$singlyLinkedList->insertAtLast(3);

	
	/**
	 * calling searchAndDelete() method to search and delete a particular given node
	 */
	$singlyLinkedList->searchAndDelete(50);
	$singlyLinkedList->removeDuplicate();
	

	
	/**
	 * for displaying the elements inside the list.
	 */
	$singlyLinkedList->display();
?>