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
} 