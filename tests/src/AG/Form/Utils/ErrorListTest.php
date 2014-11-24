<?php
namespace AG\Form\Utils;


class ErrorListTest
{
    private $form;
    private $validator;
    private $list;

    public function setUp()
    {
        $this->form = new \AG\Form\Types\Form('#','POST');
        $nome = new \AG\Form\Types\Input\InputBasic('text', 'nome', new \AG\Form\Utils\Label('nome','Nome:'));
        $this->form->addElement($nome);
        $this->validator = new \AG\Form\Types\Validator($this->form);

        $erros = $this->validator->validator();

        $this->list = new \AG\Form\Utils\ErrorList($erros);
    }

    public function testVerificaSeConsegueMostrarErros()
    {
        assertTrue($this->list->render());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaSeOsParametrosEstaoCorretos()
    {
        $this->list = new \AG\Form\Utils\ErrorList("Este eh um teste!");
    }
} 