<?php

namespace AG\Form\Types\Input;


use AG\Form\Interfaces\ElementInterface;

/*
 * inputs without value: color, date, datetime, datetime-local, email, file, image, search
 *                       month, , tel, text, time, url, week, password,
 * inputs with value: button, submit, reset, radio (label), checkbox, hidden,
 * input special: image (src, alt), number (min="1" max="5"), range(min="1" max="5")
 */

abstract class InputAbstract implements ElementInterface
{
    protected $type;
    protected $name;
    protected $element;

    abstract function render();
}