<?php
namespace AG\Form\Types\Select;
use AG\Form\Interfaces\ElementInterface;
use AG\Form\Utils\Label;

class Select implements ElementInterface
{
    protected $name;
    protected $element;
    protected $options = array();

    public function __construct($name, $options = array(), Label $label = null)
    {
        if (!is_string($name) || !is_array($options))
        {
            throw new \InvalidArgumentException("Os parametros contem erros!");
        }

        $this->name = $name;
        $this->options = $options;

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

        $this->element .= '<select class="form-control" name="'.$this->name.'">';

        foreach ($this->options as $opc){
            $this->element .= '<option value="'.$opc[0].'">'.$opc[1].'</option>';
        }

        $this->element .= '</select></div>';

        return $this->element;
    }

}