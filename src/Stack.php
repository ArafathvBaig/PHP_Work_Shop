<?php

include 'LinkedList.php';
/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Stack Problem
 */
class Stack
{
    public $count;
    public    function __construct()
    {
        $this->count = 0;
    }

    /**
     * Function to get size of the stack
     * Non-Parameterized Function
     * Returns the Size
     */
    public    function size()
    {
        return $this->count;
    }

    /**
     * Function to check the stack is empty or not
     * Non-Parameterized Function
     * Returns the boolean value true or false
     */
    public    function isEmpty()
    {
        if ($this->count > 0) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Function to Pust element to the stack
     * Passing Data as Parameter
     */
    public    function push($data)
    {
        $linkedList = new LinkedList();
        $linkedList->insert($data);
        $this->count++;
    }

    /**
     * Function to PoP the element from the stack
     * Non-Parameterized Function
     * returns 1 if deleted or -1 if list is empty
     */
    public    function pop()
    {
        $linkedList = new LinkedList();
        return $linkedList->delete();
    }

    /**
     * Function to get the top element of stack
     * Non-Parameterized Function
     * Returns the result
     */
    public    function peek()
    {
        $linkedList = new LinkedList();
        return $linkedList->headNode();
    }

    /**
     * Function to display the elements of the stack
     * Non-Parameterized funciton
     */
    public function display()
    {
        $linkedList = new LinkedList();
        $linkedList->printList();
    }
}
$stack = new Stack();
$result = $stack->isEmpty();
if ($result == true) {
    echo "\nStack is Empty.";
} else {
    echo "\nStack is Not-Empty.";
}
// Add element
$stack->push(15);
$stack->push(14);
$stack->push(31);
$stack->push(21);
$stack->push(10);
$stack->display();
$result = $stack->peek();
if ($result == 0) {
    echo "\nStack is Empty.";
} else {
    echo "\nTop Element is :: " . $result;
}
// Delete Stack Element
$data = $stack->pop();
echo "\nPop element is :: ", ($data), "\n";
$stack->display();
$data = $stack->pop();
echo "\nPop element is :: ", ($data), "\n";
$stack->display();
echo $stack->size();
