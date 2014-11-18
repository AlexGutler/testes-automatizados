<?php

namespace AG\Form\Types\Input;
use AG\Form\Types\Input\InputAbstract;
/*
 * inputs with value: button, submit, reset, radio (label), checkbox, hidden,
 */

class InputActions extends InputAbstract
{
    protected $value;

    function __construct($type, $name, $value)
    {
        if (!is_string($type) || !is_string($name) || !is_string($value))
        {
            throw new \InvalidArgumentException("Os parametros contem erros!");
        }

        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
    }

    public function render()
    {
        $this->element .= '<div class="form-group">';
        $this->element .= '<div class="col-sm-6 col-sm-offset-2">';
        $this->element .= '<input type="'.$this->type.'" class="btn btn-primary" name="'.$this->name.'" value="'.$this->value.'">';
        $this->element .= '</div></div>';

        return $this->element;
    }
}