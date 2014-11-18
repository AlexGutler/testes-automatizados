<?php

namespace AG\Form\Types\TextArea;


use AG\Form\Interfaces\ElementInterface;
use AG\Form\Utils\Label;

class TextArea implements ElementInterface
{
    protected $rows;
    protected $name;
    protected $element;

    public function __construct($name, $rows, Label $label = null)
    {
        if (!is_string($name) || !is_numeric($rows))
        {
            throw new \InvalidArgumentException("Os Parametros Contém Erros!");
        }

        $this->name = $name;
        $this->rows = $rows;

        if (isset($label))
        {
            $this->label = $label;
        }
    }

    public function render()
    {
        $this->element .= '<div class="form-group">';
        if (isset($this->label))
        {
            $this->element .= $this->label->render();
            $this->element .= '<div class="col-sm-6">';
        } else {
            $this->element .= '<div class="col-sm-6 col-sm-offset-2">';
        }
        $this->element .= '<textarea class="form-control" name="'.$this->name.'" rows="'.$this->rows.'"></textarea>';
        $this->element .= '</div></div>';

        return $this->element;
    }
}