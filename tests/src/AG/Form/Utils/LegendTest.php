<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 18/11/14
 * Time: 19:40
 */

namespace AG\Form\Utils;


class LegendTest extends \PHPUnit_Framework_TestCase
{
    public function testVerificaSeConsegueRenderizar()
    {
        $legend = new Legend("Legenda");

        $this->assertEquals('<legend>Legenda</legend>', $legend->render());
    }

} 