<?php

namespace AG\Form\Utils;


use AG\Form\Interfaces\ElementInterface;

class Label implements ElementInterface
{
    protected $for;
    protected $caption;

    public function __construct($for, $caption)
    {
        $this->for = $for;
        $this->caption = $caption;
    }

    public function render()
    {
        return '<label for="'.$this->for.'" class="col-sm-2 control-label">'.$this->caption.'</label>';
    }
}