<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 18/11/14
 * Time: 19:28
 */

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
} 