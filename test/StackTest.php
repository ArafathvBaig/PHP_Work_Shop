<?php

use PHPUnit\FrameWork\Testcase;
include 'C:\xampp\htdocs\PHP Programming\WorkShop\src\Stack.php';
class StackTest extends TestCase
{
    public function testToSearchElementIfPresentTrue()
    {
        $stack = new Stack();
        $stack->insert(3);
        $stack->insert(4);
        $stack->insert(10);
        $result = $stack->search(8);
        $this->assertEquals(-1, $result);
    }
}