<?php

namespace AG\Form\Types\Input;


use AG\Form\Utils\Label;

class InputBasicsTest extends \PHPUnit_Framework_TestCase
{
    public function testVerificaSeOTipoDaClasseEstaCorreto()
    {
        $this->assertInstanceOf('\AG\Form\Types\Input\InputBasic', new \AG\Form\Types\Input\InputBasic('text','nome', new \AG\Form\Utils\Label('nome','Nome:')));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaSeOsParametrosEstaoCorretos()
    {
        new InputBasic(0, 1);
    }

    public function testVerificaSeConsegueRenderizarComLabel()
    {
        $input = new InputBasic('text', 'nome', new Label('nome', 'Nome:'));

        $element = '<div class="form-group">';
        $element .= '<label for="nome" class="col-sm-2 control-label">Nome:</label>';
        $element .= '<div class="col-sm-6">';
        $element .= '<input type="text" class="form-control" name="nome" value="">';
        $element .= '</div></div>';

        $this->assertEquals($element, $input->render());
    }

    public function testVerificaSeConsegueRenderizarSemLabel()
    {
        $input = new InputBasic('text', 'nome');

        $element = '<div class="form-group">';
        $element .= '<div class="col-sm-6 col-sm-offset-2">';
        $element .= '<input type="text" class="form-control" name="nome" value="">';
        $element .= '</div></div>';

        $this->assertEquals($element, $input->render());
    }

    public function testVerificaGetterAndSetterValue()
    {
        $input = new InputBasic('text', 'nome', null, 'Teste');
        $input->setValue('Nome');
        $this->assertEquals('Nome',$input->getValue());
    }
} 