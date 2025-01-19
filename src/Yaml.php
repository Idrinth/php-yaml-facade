<?php

namespace De\Idrinth\Yaml;

use De\Idrinth\Yaml\Wrapper\PhpYaml;
use De\Idrinth\Yaml\Wrapper\SyckYaml;
use De\Idrinth\Yaml\Wrapper\SymphonyYaml;

class Yaml
{
    private static YamlImplementation $instance;

    private static function initializeImplementation(): YamlImplementation
    {
        if (extension_loaded('yaml')) {
            return new PhpYaml();
        }
        if (extension_loaded('syck')) {
            return new SyckYaml();
        }
        return new SymphonyYaml();
    }

    public static function getInstance(): YamlImplementation
    {
        if (!self::$instance) {
            self::$instance = self::initializeImplementation();
        }
        return self::$instance;
    }

    public static function encodeToString(object|array $data): string
    {
        return self::getInstance()->encodeToString($data);
    }

    public static function decodeFromString(string $string): array
    {
        return self::getInstance()->decodeFromString($string);
    }

    public static function decodeFromFile(string $file): array
    {
        return self::getInstance()->decodeFromFile($file);
    }

    public static function encodeToFile(string $file, array|object $data): bool
    {
        return self::getInstance()->encodeToFile($file, $data);
    }
}
