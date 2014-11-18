<?php
namespace AG\Form\Types\TextArea;


class TextAreaText extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaSeOsParametros()
    {
        new TextArea(1, "Este Eh Um Teste");
    }
} 