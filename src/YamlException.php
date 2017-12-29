<?php
namespace De\Idrinth\Yaml;

use Exception;
use RuntimeException;

class YamlException extends RuntimeException
{
    /**
     * @param type $message
     * @param Exception $previous
     */
    public function __construct($message, Exception $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }

}