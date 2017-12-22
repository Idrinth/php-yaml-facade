<?php

namespace De\Idrinth\Yaml\Test;

use PHPUnit\Framework\TestCase;

abstract class YamlTestCase extends TestCase
{
    /**
     * @var string
     */
    private static $text = 'very:
  simple-test: true';

    /**
     * @var array
     */
    private static $data = array('very' => array('simple-test' => true));

    /**
     * @return string
     */
    protected function getTestText() {
        return self::$text;
    }

    /**
     * @return array
     */
    protected function getTestData() {
        return self::$data;
    }

    /**
     * @param string $result
     */
    protected function compareWithString($result)
    {
        $trimmedResult = trim($result, "\r\n \t");
        $expected = self::$text;
        $this->assertEquals(
            $expected,
            $trimmedResult,
            "'$trimmedResult' does not match expected '$expected'"
        );
    }

    /**
     * @param array $result
     */
    protected function compareWithData($result)
    {
        $expected = $this->getTestData();
        $this->assertEquals(
            $expected,
            $result,
            json_encode($expected)." does not match ".json_encode($result)
        );
    }
}