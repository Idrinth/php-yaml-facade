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
            $result = Yaml::parse($string);
            if(!is_array($result)) {
                throw new YamlException("Failed to parse string.");
            }
            return $result;
        } catch (Exception $exception) {
            throw $exception instanceof YamlException ?
                $exception :
                new YamlException($exception->getMessage(), $exception);
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
