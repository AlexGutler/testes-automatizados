<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 18/11/14
 * Time: 19:31
 */

namespace AG\Form\Types\Fieldset;


class FieldsetTest extends \PHPUnit_Framework_TestCase
{
    public function testVerificaSeConsegueAbrirTag()
    {
        $fieldset = new Fieldset();

        $this->assertEquals('<fieldset>', $fieldset->openTag());
    }

    public function testVerificaSeConsegueFecharTag()
    {
        $fieldset = new Fieldset();

        $this->assertEquals('</fieldset>', $fieldset->closeTag());
    }
} 