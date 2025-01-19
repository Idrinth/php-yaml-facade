<?php

namespace De\Idrinth\Yaml;

interface YamlImplementation
{
    public function decodeFromString(string $string): array;

    public function encodeToString(array|object $data): string;

    public function decodeFromFile(string $file): array;

    public function encodeToFile(string $file, array|object $data): bool;
}
