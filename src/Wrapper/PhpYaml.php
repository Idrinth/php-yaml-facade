<?php

namespace De\Idrinth\Yaml\Wrapper;

use De\Idrinth\Yaml\YamlImplementation;

class PhpYaml implements YamlImplementation
{

    /**
     * @see http://php.net/manual/de/function.yaml-parse-file.php
     * @see http://php.net/manual/de/function.yaml-parse-url.php
     * @param string $file
     * @return array
     */
    public function decodeFromFile($file)
    {
        return preg_match('/^[a-z0-9]+:\/\//', $file) ?
            yaml_parse_uri($file) :
            yaml_parse_file($file);
    }

    /**
     * @see //http://php.net/manual/de/function.yaml-parse.php
     * @param type $string
     * @return array
     */
    public function decodeFromString($string)
    {
        return yaml_parse($string);
    }

    /**
     * @see http://php.net/manual/de/function.yaml-emit-file.php
     * @param string $file
     * @param object|array $data
     * @return boolean
     */
    public function encodeToFile($file, $data)
    {
        return yaml_emit_file($file, $data);
    }

    /**
     * @see http://php.net/manual/de/function.yaml-emit.php
     * @param object|array $data
     * @return string
     */
    public function encodeToString($data)
    {
        return yaml_emit($data, YAML_ANY_ENCODING, YAML_LN_BREAK);
    }
}