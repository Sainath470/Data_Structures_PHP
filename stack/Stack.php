<?php 
class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($values = array(),$limit = 20) {
        $this->stack = array_reverse($values);
        $this->limit = $limit;
    }

    public function push($item) {
        if($this->isFull() < $this->limit){
            array_unshift($this->stack, $item);
        } else {
          echo "Stack is full cannot push element";
        }
    }

    public function pop() {
        if ($this->isEmpty()) {
         echo "Stack is empty!";
      } else {
            return array_shift($this->stack);
        }
    }

    public function isEmpty() {
        return empty($this->stack);
    }

    public function isFull(){
        return count($this->stack);
    }

    public function display(){
        foreach($this->stack as $element){
            echo $element . " ";
        }
    }
}

$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->push(6);
$stack->pop();
echo $stack->display();


?>