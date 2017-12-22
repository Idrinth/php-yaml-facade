<?php

namespace De\Idrinth\Yaml\Test;

use De\Idrinth\Yaml\Yaml;

class YamlTest extends YamlTestCase
{

    /**
     * @test
     */
    public function testEncodeToString()
    {
        $this->compareWithString(Yaml::encodeToString($this->getTestData()));
    }

    /**
     * @test
     */
    public function testDecodeFromString()
    {
        $this->compareWithData(Yaml::decodeFromString($this->getTestText()));
    }

    /**
     * @test
     */
    public function testEncodeToFile()
    {
        $file = $this->getTempFilePath();
        $this->assertTrue(
            Yaml::encodeToFile($file, $this->getTestData()),
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
        $this->compareWithData(Yaml::decodeFromFile(__DIR__.DIRECTORY_SEPARATOR.'simple.yml'));
    }
}