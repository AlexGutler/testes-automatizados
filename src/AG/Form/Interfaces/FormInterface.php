<?php

namespace AG\Form\Interfaces;

interface FormInterface
{
    public function openTag();
    public function closeTag();
    public function addElement(ElementInterface $element);
    public function render();
} 