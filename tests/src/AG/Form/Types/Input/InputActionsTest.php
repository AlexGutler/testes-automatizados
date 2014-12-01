<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 18/11/14
 * Time: 19:25
 */

namespace AG\Form\Types\Input;


class InputActionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaParametros()
    {
        new InputActions(1,2,3);
    }

    public function testVerificaSeConsegueRenderizar()
    {
        $input = new InputActions('submit','enviar','Enviar');
        $element = '';
        $element .= '<div class="form-group">';
        $element .= '<div class="col-sm-6 col-sm-offset-2">';
        $element .= '<input type="submit" class="btn btn-primary" name="enviar" value="Enviar">';
        $element .= '</div></div>';

        $this->assertEquals($element, $input->render());
    }
} 