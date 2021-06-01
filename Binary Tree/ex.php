<?php
class Node
{
 public $parent = null;
 public $left = null;
 public $right = null;
 public $data = null;
 public function __construct($data)
 {
  $this->data = $data;
 }
 public function __toString()
 {
  return $this->data;
 }
}
/** Create BinarySearchTree Class **/ 
class BinarySearchTree
{
 protected $_root = null;
 protected function _insert(&$new, &$node)
 {
  if ($node == null) {
   $node = $new;
   return;
  }
  if ($new->data <= $node->data) {
   if ($node->left == null) {
    $node->left = $new;
    $new->parent = $node;
   } else {
    $this->_insert($new, $node->left);
   }
  } else {
   if ($node->right == null) {
    $node->right = $new;
    $new->parent = $node;
   } else {
    $this->_insert($new, $node->right);
   }
  }  
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
 protected function _search(&$target,&$node)
 {
  if ($target == $node) {
   return 1;
  } else if ($target->data > $node->data && isset($node->right)) {
   return $this->_search($target, $node->right);
  } else if ($target->data <= $node->data && isset($node->left)) {
   return $this->_search($target, $node->left);
  }
  return 0;
 }
 public function insert($node)
 {
  $this->_insert($node, $this->_root);
 }
 public function search($item) 
 {
  return $this->_search($item, $this->_root);
 }
}
/* Add Data in Nodes **/
$node1 = new Node(43);
$node2 = new Node(52);
$node3 = new Node(44);
$node4 = new Node(47);
$node5 = new Node(65);
/* Create Object **/
$obj = new BinarySearchTree();
$obj->insert($node1);
$obj->insert($node2);
$obj->insert($node3);
$obj->insert($node4);
$obj->insert($node5);

$obj->displayTree($node1);
$obj->displayTree($node2);
$obj->displayTree($node3);
$obj->displayTree($node4);
?>