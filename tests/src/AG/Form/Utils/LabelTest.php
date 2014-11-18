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

    public function testVerificaSeEstaRenderizando()
    {
        $for = 'nome';
        $caption = 'Nome';
        $label = new Label($for, $caption);
        $this->assertEquals('<label for="'.$for.'" class="col-sm-2 control-label">'.$caption.'</label>', $label->render());
    }
} 