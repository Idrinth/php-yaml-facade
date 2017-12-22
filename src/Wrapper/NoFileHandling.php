<?php

namespace De\Idrinth\Yaml\Wrapper;

use De\Idrinth\Yaml\YamlImplementation;

abstract class NoFileHandling implements YamlImplementation
{

    /**
     * @param string $file
     * @param object|array $data
     * @return boolean
     */
    public function encodeToFile($file, $data)
    {
        return file_put_contents($file, $this->encodeToString($data)) !== false;
    }

    /**
     * @param string $file
     * @return array
     */
    public function decodeFromFile($file)
    {
        return $this->decodeFromString(file_get_contents($file));
    }
}