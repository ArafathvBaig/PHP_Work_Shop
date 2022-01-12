<?php

include 'StackNode.php';

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to compute Linked List
 */
class LinkedList
{
    public $head;
    public function __construct()
    {
        $this->head = null;
    }

    /**
     * Function to add a data at first (head)
     * Passing data as parameter
     */
    public function insert($data)
    {
        $newNode = new StackNode();
        $newNode->data = $data;
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    /**
     * Function to delete a data at first (head)
     * Non-Parameterized Function
     */
    public function delete()
    {
        if ($this->head != null) {
            if ($this->head->next == null) {
                $this->head = null;
            } else {
                $temp = new StackNode();
                $temp = $this->head;
                $this->head = $this->head->next;
                $temp = null;
            }
            return 1;
        } else {
            return -1;
        }
    }

    /**
     * Function the get the head
     * returns head if not empty
     * else returns 0
     */
    public function headNode()
    {
        if ($this->head == null) {
            return 0;
        } else {
            return $this->head;
        }
    }

    /**
     * Function to print the Elements of the list
     * Non Parameterized Function
     */
    public function printList()
    {
        $temp = new StackNode();
        $temp = $this->head;
        if ($temp != null) {
            echo "The list contains: ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }
}
