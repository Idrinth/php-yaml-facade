<?php

namespace De\Idrinth\Yaml\Test;

use De\Idrinth\Yaml\YamlImplementation;

abstract class YamlImplementationTest extends YamlTestCase
{

    /**
     * @return YamlImplementation
     */
    abstract protected function getInstance();

    /**
     * @test
     */
    public function testEncodeToString()
    {
        $this->compareWithString($this->getInstance()->encodeToString($this->getTestData()));
    }

    /**
     * @test
     */
    public function testDecodeFromString()
    {
        $this->compareWithData($this->getInstance()->decodeFromString($this->getTestText()));
    }

    /**
     * @test
     * @expectedException \De\Idrinth\Yaml\YamlException
     */
    public function testDecodeFromBrokenString()
    {
        $this->compareWithData($this->getInstance()->decodeFromString($this->getTestBroken()));
    }

    /**
     * @test
     */
    public function testEncodeToFile()
    {
        $file = $this->getTempFilePath();
        $this->assertTrue(
            $this->getInstance()->encodeToFile($file, $this->getTestData()),
            "Couldn't write file $file"
        );
        $this->compareWithString(file_get_contents($file));
        @unlink($file);
    }

    /**
     * @test
     */
    public function testDecodeFromFile()
    {
        $this->compareWithData($this->getInstance()->decodeFromFile(__DIR__.DIRECTORY_SEPARATOR.'simple.yml'));
    }

    /**
     * @test
     * @expectedException \De\Idrinth\Yaml\YamlException
     */
    public function testDecodeFromBrokenFile()
    {
        $this->compareWithData($this->getInstance()->decodeFromFile(__DIR__.DIRECTORY_SEPARATOR.'broken.yml'));
    }
}
