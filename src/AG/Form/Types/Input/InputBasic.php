<?php

namespace AG\Form\Types\Input;
use AG\Form\Types\Input\InputAbstract;
use AG\Form\Utils\Label;

/*
 * inputs without value: color, date, datetime, datetime-local, email, file, image, search
 *                       month, , tel, text, time, url, week, password,
 */

class InputBasic extends InputAbstract
{
    protected $type, $name, $value;

    public function getName()
    {
        return $this->name;
    }

    public function setValue($value)
    {
        $this->value = $value;
        //return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    function __construct($type, $name, Label $label = null, $value = null)
    {
<<<<<<< HEAD
=======
        //or !is_object($label)
>>>>>>> 2cbcb95e3fc3317ce92d3bbf0e8ebf2d82bda745
        if (!is_string($type) || !is_string($name))
        {
            throw new \InvalidArgumentException("Os valores devem ser strings!");
        }

        $this->type = $type;
        $this->name = $name;

        if (isset ($label))
        {
            $this->label = $label;
        }

        $this->value = $value;
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

        $this->element .= '<input type="'.$this->type.'" class="form-control" name="'.$this->name.'" value="'.$this->getValue().'">';
        $this->element .= '</div></div>';

        return $this->element;
    }
}