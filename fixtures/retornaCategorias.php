<?php
require_once 'conexaoDB.php';

function retornaCategorias()
{
    try {
        $conn = conexaoDB();

        $sql = "select * from `categorias`;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $categorias = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $options = array();
        foreach($categorias as $categoria)
        {
            $options[] = array($categoria['id'],$categoria['categoria']);
        }

        return $options;

    } catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}