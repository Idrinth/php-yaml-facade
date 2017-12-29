<?php

namespace De\Idrinth\Yaml\Wrapper;

use De\Idrinth\Yaml\YamlException;
use Exception;
use Symfony\Component\Yaml\Yaml;

class SymphonyYaml extends NoFileHandling
{

    /**
     * @see http://api.symfony.com/2.6/Symfony/Component/Yaml/Yaml.html#method_parse
     * @param string $string
     * @return array
     * @throws YamlException
     */
    public function decodeFromString($string)
    {
        try {
            return Yaml::parse($string);
        } catch(Exception $exception) {
            throw new YamlException($exception->getMessage(), $exception);
        }
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
