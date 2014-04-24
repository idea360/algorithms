<?php
class Node{
	public $left = null;
	public $right = null;
	public $data;
	
	function __construct($data){
		$this->data = $data;
	}
	function get_data(){
		return $this->data;
	}
	function set_data($data){
		$this->data = $data;
	}
}

class BinarySearchTree{
	
	public $root;
	public $count = 0;
	
	//Create the first node when creating a new BinarySearchTree Object.
	function __construct($data){
		$this->root = null;
		//Call the insert function to create the first node.
		$this->insert($data);
	}
	function insert($data){
		if ($this->root == null){
				$this->root = new Node($data);
				$this->count++;
		}
		else{
			$this->insertData($data ,$this->root);
		}
	}	
	
	//Sees where we need insert the data at!
	private function insertData($data, $inode){
		if($inode->data < $data){
			if($inode->left != null){
				$this->insertData($data, $inode->left);
			}
			else{
				$inode->left = new Node($data);
				$this->count++;
			}
		}
		elseif($inode->data > $data){
			if($inode->right != null){
				$this->insertData($data, $inode->right);
			}
			else{
				$inode->right = new Node($data);
				$this->count++;
			}
		}
		else{
			return 1;
		}
	}
	function printTree(){
		if ($this->root == null){
			return 1;
		}
		else{
			echo "(" . $this->root->data . ")";
			$this->printNodes($this->root);
		}
	}
	private function printNodes($jnode){
		//I need to make the output look MUCH nicer!
		if($jnode->left != null){
			$this->printNodes($jnode->left);
			echo $jnode->left->data . " left" . "<br>";
		}
		if($jnode->right != null){
			$this->printNodes($jnode->right);
			echo $jnode->right->data . " right" . "<br>";
		}
		else{
			return 1;
		}
	}
} // End Binary Search class.

$initialNode = rand(1, 500);
$mybtree = new BinarySearchTree($initialNode);
echo "Creating ninitial node with value: " . $initialNode . "<br>";

for ($i = 0; $i < 10000; $i++){
	$temp = rand(1, 500);
	echo "value $i is " . $temp . "<br>";
	$mybtree->insert($temp);
}

$mybtree->printTree();
?>