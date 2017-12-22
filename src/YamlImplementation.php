<?php

namespace De\Idrinth\Yaml;

interface YamlImplementation
{

    /**
     * @param string $string
     * @return array
     */
    public function decodeFromString($string);

    /**
     * @param array|object $data
     * @return string $string
     */
    public function encodeToString($data);

    /**
     * @param string $file
     * @return array
     */
    public function decodeFromFile($file);

    /**
     * @param string $file
     * @param array|object $data
     * @return boolean
     */
    public function encodeToFile($file, $data);
}
