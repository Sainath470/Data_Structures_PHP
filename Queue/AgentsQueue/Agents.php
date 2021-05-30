<?php

include("Queue.php");
class AgentQueue implements Queue{
    private $limit;
    private $queue;

    public function __construct( $limit = 20){
        $this->limit = $limit;
        $this->queue = [];
    }

    public function dequeue()  {
        if($this->isEmpty()){
            throw new UnderflowException('Queue is empty');
        }else{
            return array_shift($this->queue);
        }
    }

    public function enqueue($newItem){
        if(count($this->queue)< $this->limit){
            array_push($this->queue, $newItem);
        }else{
            throw new OverflowException('Queue is full');
        }
    }

    public function peek(){
        return current($this->queue);
    }

    public function isEmpty():bool{
        return empty($this->queue);
    }
}

try{
    $agents = new AgentQueue(10);
    $agents->enqueue("Fred");
    $agents->enqueue("John");
    $agents->enqueue("Kate");
    $agents->enqueue("Aditya");
    $agents->enqueue("Munna");
    echo $agents->dequeue(). "\n";
    echo $agents->dequeue(). "\n";
    echo $agents->peek(). "\n";
}catch(Exception $e){
    echo $e->getMessage();
}

?>