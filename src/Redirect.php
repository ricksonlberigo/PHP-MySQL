<?php

/**
 * Criando rotina que vai ser responsável por fazer o redirecionamento após uma ação
 */

function redirect(string $url)
{
    header("Location: $url");
}
