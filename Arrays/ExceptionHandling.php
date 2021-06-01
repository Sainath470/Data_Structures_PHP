<?php

class myException extends Exception{
    function errorMessage(){
        $error = "\nMy Exception Message: " . $this->getMessage() . 
        "\n Error on line: " . $this->getLine();
        return $error;
    }
 
}

function division($n){
    try{
        if($n <= 0){
       throw new Exception("Enter the valid number\n");
        }
        if($n == 3){
            throw new myException("Number should not equals to 3");
        }
        $div = 2 / $n;
        echo $div;
    }catch(myException $e){
        echo $e->errorMessage();
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

division(0);
division(3);
?>