<?php

include("BinaryNode.php");
class BinaryTree{

    public $root = NULL;

    public function __construct($node){
        $this->root = $node;
    }

    public function displayTree($node, $space=0) {  
        $count = 10 ;
        if($node == NULL)
        return;
        $space += $count;
        $this->displayTree($node->right, $space);
        echo "\n";
        for( $i = $count; $i < $space; $i++)
             echo " ";
           
            echo "$node->data";
        $this->displayTree($node->left, $space);
    }    
}

$parent = new BinaryNode(1);

$tree = new BinaryTree($parent);


$child1 = new BinaryNode(2);
$child2 = new BinaryNode(3);

$leftOffChild1 = new BinaryNode(4);
$rightOffChild1 = new BinaryNode(5);
$leftOffChild2 = new BinaryNode(6);
$rightOffChild2 = new BinaryNode(7);


$child1->addChild($leftOffChild1 , $rightOffChild1);
$child2->addChild($leftOffChild2, $rightOffChild2);

$parent->addChild($child1, $child2);


$tree->displayTree($tree->root);

?>