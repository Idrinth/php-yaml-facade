<?php

namespace De\Idrinth\Yaml\Test\Wrapper;

use De\Idrinth\Yaml\Test\YamlImplementationTest;
use De\Idrinth\Yaml\Wrapper\SyckYaml;

class SyckYamlTest extends YamlImplementationTest
{
    /**
     * prevents fatals because of missing extension
     */
    protected function setUp()
    {
        parent::setUp();
        $this->assertTrue(extension_loaded('syck'), "Extension yaml is not loaded");
    }

    /**
     * @return SyckYaml
     */
    protected function getInstance()
    {
        return new SyckYaml();
    }
}