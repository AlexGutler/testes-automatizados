<?php
namespace AG;

class TesteIndex extends \PHPUnit_Extensions_Selenium2TestCase
{
    public function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://localhost:8088/');
    }

    public function testVerificaTitle()
    {
        $this->url('http://localhost:8088/');
        $this->assertEquals('Testes Automatizados', $this->title());
    }

    public function testVerificaSeNomeEstaVazio()
    {
        $this->url("/");
        $campoNome = $this->byName('nome');
        $this->assertEquals("", $campoNome->value());
    }

    public function testVerificaSeValorEstaErrado()
    {
        $this->url("/");
        $campoValor = $this->byName('valor');
        $this->assertEquals('Editora leYa', $campoValor->value());
    }

    public function testVerificaSeDescricaoEstaPreenchida()
    {
        $this->url("/");
        $campoDescricao = $this->byName('descricao');
        $this->assertEquals("Livro da Série Instrumentos Mortais da Autora Cassandra Clare.", $campoDescricao->value());
    }

    public function testVerificaSeCategoriaEstaSelecionada()
    {
        $this->url("/");
        $campoCategoria = $this->byName('categorias');
        $this->assertTrue($campoCategoria->selected());
    }

    public function testVerificaSubmitComPhp()
    {
        $this->url("/");
        $form = $this->byClassName("form-horizontal");
        $form->submit();

        $msgErro = $this->byCssSelector('strong')->text();

        $this->assertEquals('Erros encontados:', $msgErro);
    }
} 