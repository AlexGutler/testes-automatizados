<?php

namespace AG\Form\Utils;


class ErrorList
{
    protected $items = array();
    protected $list;

    function __construct($items = array())
    {
        if (!is_array($items)){
            throw new \InvalidArgumentException("O parametro deve ser um array!");
        }
        $this->items = $items;
    }

    function render()
    {
        $this->list .= '<div class="col-sm-8">';
        $this->list .= '<p class="alert-danger"><strong>Erros encontados:</strong></p>';
        $this->list .= '<ul style="list-style-type:disc">';

        foreach ($this->items as $item)
        {
            $this->list .= '<li>'.$item.'</li>';
        }

        $this->list .= '</ul>';

        $this->list .= '</div>';
        echo $this->list;

        return true;
    }
} 