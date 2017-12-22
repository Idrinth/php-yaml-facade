<?php

namespace De\Idrinth\Yaml\Wrapper;

use Symfony\Component\Yaml\Yaml;

class SymphonyYaml extends NoFileHandling
{

    /**
     * @see http://api.symfony.com/2.6/Symfony/Component/Yaml/Yaml.html#method_parse
     * @param string $string
     * @return array
     */
    public function decodeFromString($string)
    {
        return Yaml::parse($string);
    }

    /**
     * @see http://api.symfony.com/2.6/Symfony/Component/Yaml/Yaml.html#method_dump
     * @param object|array $data
     * @return string
     */
    public function encodeToString($data)
    {
        return Yaml::dump($data, 2, 2);
    }
}