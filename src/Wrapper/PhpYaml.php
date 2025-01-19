<?php

namespace De\Idrinth\Yaml\Wrapper;

use De\Idrinth\Yaml\YamlException;
use De\Idrinth\Yaml\YamlImplementation;

class PhpYaml implements YamlImplementation
{

    /**
     * @see http://php.net/manual/de/function.yaml-parse-file.php
     * @see http://php.net/manual/de/function.yaml-parse-url.php
     * @throws YamlException
     */
    public function decodeFromFile(string $file): array
    {
        $result = preg_match('/^[a-z0-9]+:\/\//', $file) ?
            @yaml_parse_uri($file) :
            @yaml_parse_file($file);
        if (!is_array($result)) {
            throw new YamlException("Failed to parse file: ".json_encode(error_get_last()));
        }
        return $result;
    }

    /**
     * @see http://php.net/manual/de/function.yaml-parse.php
     * @throws YamlException
     */
    public function decodeFromString(string $string): array
    {
        $result = @yaml_parse($string);
        if (!is_array($result)) {
            throw new YamlException("Failed to parse string: ".json_encode(error_get_last()));
        }
        return $result;
    }

    /**
     * @see http://php.net/manual/de/function.yaml-emit-file.php
     */
    public function encodeToFile(string $file, object|array $data): bool
    {
        return yaml_emit_file($file, $data);
    }

    /**
     * @see http://php.net/manual/de/function.yaml-emit.php
     */
    public function encodeToString(object|array $data): string
    {
        return yaml_emit($data, YAML_ANY_ENCODING, YAML_LN_BREAK);
    }
}
