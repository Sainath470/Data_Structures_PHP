<?php 
class Stack
{
    protected $stack;
    protected $limit;

    /**
     * initializing the object
     *
     * @param array $values storing the indexes in reverse order 
     * @param integer $limit is the size of the stack
     */
    public function __construct($values = array(),$limit = 20) {
        $this->stack = array_reverse($values);
        $this->limit = $limit;
    }

    /**
     * function to push elements into stack
     * before pushing the element 
     * first checking whether the stack is full or not
     *
     * @param $item is the data that is going to be pushed into stack
     * @return void
     */
    public function push($item) {
        if($this->isFull() < $this->limit){
            array_unshift($this->stack, $item);
        } else {
          echo "Stack is full cannot push element";
        }
    }

    /**
     * pop function to remove the last element from the list
     * always last element is removed(LIFO)
     * Before popping the element
     * first checking whether the stack is empty or not
     *
     * @return void
     */
    public function pop() {
        if ($this->isEmpty()) {
         echo "Stack is empty!";
         } else {
            return array_shift($this->stack);
        }
    }

    /**
     * checks whether the stact is empty or not
     *
     * @return whether the variable is empty or not
     */
    public function isEmpty() {
        return empty($this->stack);
    }

    /**
     * checking whether the stack is full
     *
     * @return count of the elements in stack
     */
    public function isFull(){
        return count($this->stack);
    }

    /**
     * function displays the elements in the stack
     *
     * @return void
     */
    public function display(){
        foreach($this->stack as $element){
            echo $element . " ";
        }
    }
}

/**
 * creating the object
 */
$stack = new Stack();

/**
 * calling the functions
 */
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->push(6);
$stack->pop();

/**
 * displaying the elements inside the stack
 */
echo $stack->display();


?>