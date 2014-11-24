<?php

namespace AG\Form\Types;


class FormTest extends \PHPUnit_Framework_TestCase
{
    private $form;

    public function setUp()
    {
        $this->form = new \AG\Form\Types\Form("#","POST");
    }

    public function tearDown()
    {
        unset($this->form);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaSeConsegueRenderizar()
    {
        $this->form->render();
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaSeConseguePopularSeNaoEhArray()
    {
        $this->form->populate("Este eh um teste!");
    }

    public function testVerificaSeConsegueFecharTag()
    {
        $result = $this->form->closeTag();

        $this->assertEquals('</form>', $result);
    }
} 