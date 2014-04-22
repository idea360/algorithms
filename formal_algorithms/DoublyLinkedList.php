<?php
class Node{
	 public $data = null;
	 public $next = null;
	 public $previous = null;
	
	function __construct($data){	
		$this->data = $data;
	}
	function get_data(){
		return $this->data;
	}
}

class LinkedList{
	public $head;
	public $tail;
	public $nodeCount;
	
	function __construct($data){
		$newNode = new Node($data);
		$this->head = $newNode;
		$this->tail = $newNode;
		$this->count = 1;
	}
	function insert($data){
		$newNode = new Node($data);
		
		$newNode->previous = $this->head;
		$this->head->next = $newNode;
		$this->head = $newNode;
		
		$this->nodeCount++;
	}
	function displayListForward(){
		$temp = $this->tail;
		
		echo "Display forward! \n";
		while ($temp != null){
			echo $temp->data . " \n";
			$temp = $temp->next;
		}
	}
	function displayListBackwards(){
		$temp = $this->head;
		
		echo "Display backwards! \n";
		while($temp != null){
			echo $temp->data . " \n";
			$temp = $temp->previous;
		}
	}
}
$myLinkedList = new LinkedList(45);
$myLinkedList->insert(55);
$myLinkedList->insert(69);
$myLinkedList->insert(55);
$myLinkedList->insert(69);
$myLinkedList->insert(44);
$myLinkedList->insert(56);
$myLinkedList->insert(32);
$myLinkedList->insert(68);

$myLinkedList->displayListForward();
$myLinkedList->displayListBackwards();

?>