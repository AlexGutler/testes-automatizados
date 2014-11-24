<?php
namespace AG\Form\Types;


use AG\Form\Interfaces\ElementInterface;
use AG\Form\Interfaces\FormInterface;
use AG\Form\Types\Input\InputBasic;
use AG\Form\Types\Select\Select;

class Form implements FormInterface
{
    protected $action;
    protected $method;
    protected $elements = array();

    public function __construct($action = null, $method = null)
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function openTag()
    {
        return '<form class="form-horizontal" action="'.$this->action.'" method="'.$this->method.'" role="form" name="form">';
    }

    public function closeTag()
    {
       return '</form>';
    }

    public function addElement(ElementInterface $element)
    {
        $this->elements[] = $element;
    }

    public function render()
    {
        if (empty($this->elements)) {
            throw new \InvalidArgumentException("Nenhum elemento encontrado para ser renderizado!");
        }

        echo $this->openTag();

        foreach ($this->elements as $value){
            echo $value->render();
        }

        echo $this->closeTag();
    }

    public function populate($dados)
    {
        if (!is_array($dados))
        {
            throw new \InvalidArgumentException("O parametro deve ser um array!");
        }

        $i = 0;
        foreach ($this->elements as $value)
        {
            if ($value instanceof InputBasic){
                $value->setValue($dados[$i]);
            } elseif ($value instanceof Select)
            {

            }
            $i ++;
        }
    }

    public function getElements()
    {
        return $this->elements;
    }

}