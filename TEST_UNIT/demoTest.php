<?php
 require 'demo.php';

 use PHPUnit\Framework\TestCase;
 class DemoTest extends TestCase{
    public function testMultiply(){
        $this->assertEquals(6, multiply(2,3));
        $this->assertEquals(10, multiply(5,3));
        $this->assertEquals(-4, multiply(6,3));
    }
 }
?>