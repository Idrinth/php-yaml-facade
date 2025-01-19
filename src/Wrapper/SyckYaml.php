<?php

namespace De\Idrinth\Yaml\Wrapper;

use De\Idrinth\Yaml\YamlException;

class SyckYaml extends NoFileHandling
{

    /**
     * @see https://github.com/indeyets/syck/blob/master/ext/php/phpext.c#L841
     * @throws YamlException
     */
    public function decodeFromString(string $string): array
    {
        error_clear_last();
        $result = @syck_load($string);
        if (!is_array($result)) {
            throw new YamlException("Failed to parse string: ".json_encode(error_get_last()));
        }
        return $result;
    }

    /**
     * @see https://github.com/indeyets/syck/blob/master/ext/php/phpext.c#L891
     */
    public function encodeToString(object|array $data): string
    {
        return syck_dump($data);
    }
}
