<?php
 
/**
 * Destruímos a nossa sessão atual, isto significa que a super global $_SESSION
 * será resetada, tudo será removido.
 */
session_destroy();

/* Redirecionamos o utilizador para a página de login */
url_redirect(['route' => 'login']);