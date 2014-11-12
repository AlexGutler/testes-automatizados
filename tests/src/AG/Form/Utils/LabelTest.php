<?php

namespace AG\Form\Utils;


class LabelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaSeOsParametrosEstaoCorretos()
    {
        new \AG\Form\Utils\Label(1,10);
    }
} 