<?php

namespace AG\Form\Types;


use AG\Form\Types\Input\InputBasic;
use AG\Form\Types\Select\Select;

class Validator
{
    function __construct(Form $form)
    {
        if(!$form instanceof Form){
            throw new \InvalidArgumentException("É parametro deve ser um form!");
        }
        $this->form = $form;
    }

    function validator()
    {
        $elements = $this->form->getElements();
        $erros = array();

        foreach ($elements as $element)
        {
            if($element instanceof InputBasic){
                if (($element->getName() == 'nome') and ($element->getValue() == null))
                {
                    $erros[] = 'O campo nome está vazio!';
                } elseif (($element->getName() == 'valor') and (! is_numeric($element->getValue())))
                {
                    $erros[] = 'O valor não é numérico!';
                } elseif (($element->getName() == 'descricao') and (strlen($element->getValue()) > 200)) {
                    $erros[] = 'O tamanho da descrição supera 200 caracteres!';
                }
            }
        }

        return $erros;
    }
} 