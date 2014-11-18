<?php

namespace AG\Form\Types\Input;
use AG\Form\Types\Input\InputAbstract;

/*
 * inputs: checkbox e radio
 */

class InputSelections extends InputAbstract
{
    protected $value;
    protected $msg;

    function __construct($type, $name, $value, $msg)
    {

        if (!is_string($type) || !is_string($name) || !is_string($value) || !is_string($msg))
        {
            throw new \InvalidArgumentException("Os parametros contem erros!");
        }

        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->msg = $msg;
    }

    public function render()
    {
        if ($this->type == 'checkbox')
        {
            $this->element .= '<div class="checkbox col-sm-offset-2"><label>';
        } else {
            $this->element .= '<div class="radio col-sm-offset-2"><label>';
        }
        //$this->element .= '<div class="col-sm-6 col-sm-offset-2">';
        $this->element .= '<input type="'.$this->type.'" name="'.$this->name.'" value="'.$this->value.'"> ';
        $this->element .= $this->msg;
        $this->element .= '</label></div></div>';

        return $this->element;
    }
}