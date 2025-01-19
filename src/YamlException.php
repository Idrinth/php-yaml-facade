<?php
namespace De\Idrinth\Yaml;

use Exception;
use RuntimeException;

class YamlException extends RuntimeException
{
    public function __construct(string $message, Exception $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}
