<?php

namespace De\Idrinth\Yaml\Test;

use De\Idrinth\Yaml\YamlException;
use Exception;
use PHPUnit\Framework\TestCase;

class YamlExceptionTest extends TestCase
{
    /**
     * @test
     */
    public function testGetCode()
    {
        $exception1 = new YamlException("a");
        $this->assertEquals(0, $exception1->getCode(), "Code was somehow moddified");
        $exception2 = new YamlException("b", new Exception());
        $this->assertEquals(0, $exception2->getCode(), "Code was somehow moddified");
    }

    /**
     * @test
     */
    public function testGetMessage()
    {
        $exception1 = new YamlException("a");
        $this->assertEquals("a", $exception1->getMessage(), "Message was somehow moddified");
        $exception2 = new YamlException("b", new Exception());
        $this->assertEquals("b", $exception2->getMessage(), "Message was somehow moddified");
    }

    /**
     * @test
     */
    public function testGetPrevious()
    {
        $exception1 = new YamlException("a");
        $this->assertNull($exception1->getPrevious(), "Previous was not null moddified");
        $exception2 = new YamlException("b", $exception1);
        $this->assertEquals($exception1, $exception2->getPrevious(), "Previous was not as expected");
    }
}