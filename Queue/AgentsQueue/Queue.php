<?php

class Queue {
    private $limit;
    private $queue;

    public function __construct($limit = 20){
        $this->limit = $limit;
        $this->queue = [];
    }

    public function dequeue()  {
        if($this->isEmpty()){
            echo "Queue is empty\n";
        }else{
           array_shift($this->queue);
        }
    }

    public function enqueue($newItem){
        if($this->isFull() < $this->limit){
            array_push($this->queue, $newItem);
        }else{
            echo " Queue is full\n";
        }
    }

    public function display(){
        foreach($this->queue as $element){
            print_r ($element . "\n" );
        }
    }

    public function isEmpty(){
        return empty($this->queue);
    }

    public function isFull(){
        return count($this->queue);
    }
}


    $queue = new Queue();
    $queue->enqueue("Fred");
    $queue->enqueue("John");
    $queue->enqueue("Kate");
    $queue->enqueue("Aditya");
    $queue->enqueue("Munna");
    $queue->dequeue(). "\n";
    $queue->dequeue(). "\n";
    echo $queue->display(). "\n";


?>