<?php 

class BinaryNode{

    public $data;
    public $left;
    public $right;

    public function __construct($data = NULL){
        $this->data = $data;
        $this->left = NULL;
        $this->right = NULL;
    }

    public function addChild( $left,  $right){
        $this->left = $left;
        $this-> right = $right;
    }
}


?>