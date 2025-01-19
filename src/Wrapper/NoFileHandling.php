<?php

namespace De\Idrinth\Yaml\Wrapper;

use De\Idrinth\Yaml\YamlException;
use De\Idrinth\Yaml\YamlImplementation;

abstract class NoFileHandling implements YamlImplementation
{
    public function encodeToFile(string $file, array|object $data): bool
    {
        return file_put_contents($file, $this->encodeToString($data)) !== false;
    }

    /**
     * @throws YamlException
     */
    public function decodeFromFile(string $file): array
    {
        return $this->decodeFromString(file_get_contents($file));
    }
}
