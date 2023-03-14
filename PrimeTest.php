<?php
 require 'demo.php';
use PHPUnit\Framework\TestCase;

class PrimeTest extends TestCase {
  public function testIsPrime() {
    $this->assertTrue(isPrime(1));
    $this->assertTrue(isPrime(2));
    $this->assertTrue(isPrime(3));
    $this->assertFalse(isPrime(4));
    $this->assertTrue(isPrime(5));
   
  }
}
?>