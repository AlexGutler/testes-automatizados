<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 18/11/14
 * Time: 19:22
 */

namespace AG\Form\Types\Select;


class SelectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaParametros()
    {
        new Select(1,"Este eh Um Teste");
    }
} 