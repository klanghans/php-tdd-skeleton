<?php

namespace Test;
use Example\Example;
use PHPUnit_Framework_TestCase;

class ExampleTest extends PHPUnit_Framework_TestCase
{

    public function testExample() {
        $this->assertInstanceOf(Example::class, new Example(), 'wrong object type');
    }
}