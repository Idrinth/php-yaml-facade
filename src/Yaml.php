<?php

namespace De\Idrinth\Yaml;

use De\Idrinth\Yaml\Wrapper\PhpYaml;
use De\Idrinth\Yaml\Wrapper\SyckYaml;
use De\Idrinth\Yaml\Wrapper\SymphonyYaml;

class Yaml
{
    /**
     * @var YamlImplementation
     */
    private static $instance;

    /**
     */
    private function __construct()
    {
        //This MUST NOT be constructed
    }

    /**
     * @return YamlImplementation
     */
    private static function initializeImplementation()
    {
        if (extension_loaded('yaml')) {
            return new PhpYaml();
        }
        if (extension_loaded('syck')) {
            return new SyckYaml();
        }
        return new SymphonyYaml();
    }

    /**
     * @return YamlImplementation
     */
    private static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = self::initializeImplementation();
        }
        return self::$instance;
    }

    /**
     * @param object|array $data
     * @return string
     */
    public static function encodeToString($data)
    {
        return self::getInstance()->encodeToString($data);
    }

    /**
     * @param string $string
     * @return array
     */
    public static function decodeFromString($string)
    {
        return self::getInstance()->decodeFromString($string);
    }

    /**
     * @param string $file
     * @return array
     */
    public static function decodeFromFile($file)
    {
        return self::getInstance()->decodeFromFile($file);
    }

    /**
     * @param string $file
     * @param array $data
     * @return boolean
     */
    public static function encodeToFile($file, $data)
    {
        return self::getInstance()->encodeToFile($file, $data);
    }
}
