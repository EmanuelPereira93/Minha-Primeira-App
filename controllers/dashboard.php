<?php

/**
 * Na condição abaixo verificamos o retorno da função is_authenticated().
 * 
 * Se DIFERENTE de VERDADEIRO, então executamos o código que está entre chaves.
 */
if (!is_authenticated()) {
    /* Disparamos uma mensagem com a indicação abaixo */
    set_flash_message('Acesso negado: Faça login para ter acesso a este conteúdo.');

    /* Redirecionamos o utilizador para a página de login */
    url_redirect(['route' => 'login']);
}