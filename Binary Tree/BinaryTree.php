<?php

include("BinaryNode.php");
class BinaryTree{

    public $root = NULL;

    public function __construct($node){
        $this->root = $node;
    }

    public function traverse( $node,  $level = 0){
        if($node){
            echo str_repeat("-", $level);
            echo $node->data . "\n";

            if($node->left)
            $this->traverse($node->left, $level +1);

            if($node->right)
            $this->traverse($node->right, $level + 1);
        }
    }
}
$final = new BinaryNode("Final");

$tree = new BinaryTree($final);


$semiFinal1 = new BinaryNode("Semi Final 1");
$semiFinal2 = new BinaryNode("Semi Final 2");

$quaterFinal1 = new BinaryNode("Quarter Final 1");
$quaterFinal2 = new BinaryNode("Quarter Final 2");
$quaterFinal3 = new BinaryNode("Quarter Final 3");
$quaterFinal4 = new BinaryNode("Quarter Final 4");

$semiFinal1->addChild($quaterFinal1 , $quaterFinal2);
$semiFinal2->addChild($quaterFinal3, $quaterFinal4);

$final->addChild($semiFinal1, $semiFinal2);

$tree->traverse($tree->root);

?>