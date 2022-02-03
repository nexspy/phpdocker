<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {

    function testAdd() {
        $calculator = new Calculator();
        $result = $calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    function testAdd_returnZero() {
        $calculator = new Calculator();
        $result = $calculator->add(1, -1);
        $this->assertEquals(0, $result);
    }

}