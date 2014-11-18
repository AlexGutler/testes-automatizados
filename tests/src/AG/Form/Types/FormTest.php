<?php

namespace AG\Form\Types;


class FormTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaSeConseguePopularSeNaoEhArray()
    {
        $form = new \AG\Form\Types\Form("#","POST");

        $form->populate("Este eh um teste!");
    }

    public function testVerificaSeConsegueFecharTag()
    {
        $form = new \AG\Form\Types\Form("#","POST");
        $result = $form->closeTag();

        $this->assertEquals('</form>', $result);
    }
} 