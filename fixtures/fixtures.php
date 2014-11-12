<?php
require_once 'conexaoDB.php';

$conn = conexaoDB();

$sql = "DROP TABLE IF EXISTS `categorias`";
$conn->query($sql);

$sql = "CREATE TABLE `categorias` (
    `id` integer primary key not null,
     `categoria` varchar(100)
);";
$conn->query($sql);

$sql = "INSERT INTO `categorias`(`id`, `categoria`) VALUES
        (1,'Livros'),
        (2,'Games'),
        (3,'Celulares e Telefones'),
        (4,'Informatica e Tablets'),
        (5,'Eletrodomesticos');";
$stmt = $conn->prepare($sql);
$stmt->execute();