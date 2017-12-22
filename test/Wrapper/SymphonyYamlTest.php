<?php

namespace De\Idrinth\Yaml\Test\Wrapper;

use De\Idrinth\Yaml\Test\YamlImplementationTest;
use De\Idrinth\Yaml\Wrapper\SymphonyYaml;

class SymphonyYamlTest extends YamlImplementationTest
{

    /**
     * @return SymphonyYaml
     */
    protected function getInstance()
    {
        return new SymphonyYaml();
    }
}