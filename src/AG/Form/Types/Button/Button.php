<?php

namespace AG\Form\Types\Button;

// button, submit, reset

use AG\Form\Interfaces\ElementInterface;

class Button implements ElementInterface
{
    protected $value;
    protected $type;
    protected $name;
    protected $msg;
    protected $element;

    public function __construct($value, $type, $name, $msg)
    {
        if (!is_string($value) || !is_string($type) || !is_string($name) || !is_string($msg))
        {
            throw new \InvalidArgumentException("Os parametros contem erros!");
        }

        $this->type = $type;
        $this->value = $value;
        $this->name = $name;
        $this->msg = $msg;
    }

    public function render()
    {
        $this->element .= '<div class="form-group">';
        $this->element .= '<div class="col-sm-6 col-sm-offset-2">';
        $this->element .= '<button type="'.$this->type.'" name="'.$this->name.'" value="'.$this->value.'" class="btn btn-default">';
        $this->element .= $this->msg.'</button>';
        $this->element .= '</div></div>';

        return $this->element;
    }
}