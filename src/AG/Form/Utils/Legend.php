<?php

namespace AG\Form\Utils;


use AG\Form\Interfaces\ElementInterface;

class Legend implements ElementInterface
{
    protected $legend;

    public function __construct($legend)
    {
        $this->legend = $legend;
    }

    public function render()
    {
        return '<legend>'.$this->legend.'</legend>';
    }
}