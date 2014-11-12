<?php
    require_once 'menu.php';
    require_once 'fixtures/retornaCategorias.php';

    define('CLASS_DIR','src/');
    set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
    spl_autoload_register();
?>

<div class="container">
    <div class="row">

<?php
    $form = new \AG\Form\Types\Form('#','POST');

    $nome = new \AG\Form\Types\Input\InputBasic('text','nome', new \AG\Form\Utils\Label('nome','Nome:'));
    $valor = new \AG\Form\Types\Input\InputBasic('text','valor', new \AG\Form\Utils\Label('valor','Valor:'));
    $descricao = new \AG\Form\Types\Input\InputBasic('text','descricao', new \AG\Form\Utils\Label('descricao','Descrição:'));

    $options = retornaCategorias();

    $select = new \AG\Form\Types\Select\Select('categorias',$options, new \AG\Form\Utils\Label('categoria','Categoria:'));

    $submit = new \AG\Form\Types\Input\InputActions('submit','enviar',"Enviar");

    $form->addElement($nome);
    $form->addElement($valor);
    $form->addElement($descricao);
    $form->addElement($select);
    $form->addElement($submit);

    $dados = array(
        0 => null,
        1 => "Editora leYa",
        2 => 'Livro da Série Instrumentos Mortais da Autora Cassandra Clare.',
        3 => 1
    );
    $form->populate($dados);

    $form->render();

    if (isset($_POST['enviar'])){
        $validator = new \AG\Form\Types\Validator($form);

        $erros = $validator->validator();

        $list = new \AG\Form\Utils\ErrorList($erros);
        echo $list->render();
    }
?>


<?php
    require_once 'footer.php';
?>
