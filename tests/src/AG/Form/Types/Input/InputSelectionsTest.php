<?php
namespace AG\Form\Types\Input;


class InputSelectionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaParametros()
    {
        new InputSelections(true, false, 8, array());
    }

    public function testVerificaSeConsegueRenderizarCheckBox()
    {
        $input = new InputSelections('checkbox', 'bicicleta', 'Bike', 'Eu tenho uma bicicleta');

        $element = '<div class="checkbox col-sm-offset-2"><label>';
        $element .= '<input type="checkbox" name="bicicleta" value="Bike"> ';
        $element .= 'Eu tenho uma bicicleta';
        $element .= '</label></div></div>';

        $this->assertEquals($element, $input->render());
    }

    public function testVerificaSeConsegueRenderizarRadio()
    {
        $input = new InputSelections('radio', 'bicicleta', 'Bike', 'Eu tenho uma bicicleta');

        $element = '<div class="radio col-sm-offset-2"><label>';
        $element .= '<input type="radio" name="bicicleta" value="Bike"> ';
        $element .= 'Eu tenho uma bicicleta';
        $element .= '</label></div></div>';

        $this->assertEquals($element, $input->render());
    }
} 