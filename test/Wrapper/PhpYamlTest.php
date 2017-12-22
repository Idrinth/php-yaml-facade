<?php

namespace De\Idrinth\Yaml\Test\Wrapper;

use De\Idrinth\Yaml\Test\YamlImplementationTest;
use De\Idrinth\Yaml\Wrapper\PhpYaml;

class PhpYamlTest extends YamlImplementationTest
{
    /**
     * prevents fatals because of missing extension
     */
    protected function setUp()
    {
        parent::setUp();
        $this->assertTrue(extension_loaded('yaml'), "Extension yaml is not loaded");
    }

    /**
     * @return PhpYaml
     */
    protected function getInstance()
    {
        return new PhpYaml();
    }
}