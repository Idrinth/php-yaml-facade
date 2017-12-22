<?php

namespace De\Idrinth\Yaml\Wrapper;

class SyckYaml extends NoFileHandling
{

    /**
     * @see https://github.com/indeyets/syck/blob/master/ext/php/phpext.c#L841
     * @param string $string
     * @return array
     */
    public function decodeFromString($string)
    {
        return syck_load($string);
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
