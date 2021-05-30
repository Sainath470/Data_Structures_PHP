<?php 

class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($values = array(),$limit = 20) {
        // initialize the stack
        $this->stack = array_reverse($values);
        // stack can only contain this many items
        $this->limit = $limit;
    }

    public function push($item) {
        // trap for stack overflow
        if (count($this->stack) < $this->limit) {
            // add item to the start of the array
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop() {
        if ($this->isEmpty()) {
            // trap for stack underflow
          throw new RunTimeException('Stack is empty!');
      } else {
            // pop item from the start of the array
            return array_shift($this->stack);
        }
    }

    public function top() {
        //returns the value of the current element in an 
        //array
        return current($this->stack);
    }

    public function isEmpty() {
        //checking whether the variable(stack) is empty or not
        return empty($this->stack);
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
$stack->pop();
$stack->pop();
echo $stack->top();


?>