<?php

namespace Del;

use Laminas\Diactoros\Request;
use Psr\Http\Message\ResponseInterface;

class StackTest extends \Codeception\TestCase\Test
{
   /**
    * @var \UnitTester
    */
    protected $tester;

    /**
     * @var Stack
     */
    protected $stack;

    protected function _before()
    {
        // create a fresh stack class before each test
        $this->stack = new Stack();
    }

    protected function _after()
    {
        // unset the stack class after each test
        unset($this->stack);
    }

    /**
     *
     */
    public function testBlah()
    {
        $request = new Request();
        $handler = new
	    $this->assertInstanceOf(ResponseInterface::class, $this->stack->process($request, $handler));
    }


}
