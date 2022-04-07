<?php

/**
 * Criando conexão com o banco de dados
 */

$conn = new mysqli('nome_do_banco', 'usuario_do_banco', 'senha_do_banco', 'nome_do_banco');
$conn->set_charset('utf8');

if ($conn == false) {
    echo 'Banco de Dados não localizado';
}
