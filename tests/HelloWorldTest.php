<?php namespace alexwenzel\php_project\tests;

use alexwenzel\php_project\HelloWorld;

/**
 * Class HelloWorldTest
 * @package alexwenzel\php_project\tests
 */
class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    /**
     * TestCase
     */
    public function testHelloWorldSaysHelloWorld()
    {
        $class = new HelloWorld();
        $this->assertEquals("Hello World", $class->sayHello());
    }

    /**
     * TestCase
     */
    public function testHelloWorldFails()
    {
        $class = new HelloWorld();
        $this->assertNotEquals("Hello World 12", $class->sayHello());
    }
}