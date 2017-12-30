<?php

namespace De\Idrinth\Yaml\Wrapper;

use De\Idrinth\Yaml\YamlException;

class SyckYaml extends NoFileHandling
{

    /**
     * @see https://github.com/indeyets/syck/blob/master/ext/php/phpext.c#L841
     * @param string $string
     * @return array
     * @throws YamlException
     */
    public function decodeFromString($string)
    {
        $result = syck_load($string);
        if (!is_array($result)) {
            throw new YamlException("Failed to parse string.");
        }
        return $result;
    }

    /**
     * @see https://github.com/indeyets/syck/blob/master/ext/php/phpext.c#L891
     * @param object|array $data
     * @return string
     */
    public function encodeToString($data)
    {
        return syck_dump($data);
    }
}
