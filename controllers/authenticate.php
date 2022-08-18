<?php



if (empty($_POST['username']) || empty($_POST['password'])) {
    
    set_flash_message("Todos os campos são de preenchimento obrigatório!");
    
    url_redirect(['route' => 'login']);

}

$login = $_POST['username'];

$password = $_POST['password'];

if ($login == USER_LOGIN && $password == USER_PASSWORD) {
    /* Criamos uma chave chamda 'is_authenticated' na super global $_SESSION e guardamos um valor boleano (true) */
    $_SESSION['is_authenticated'] = true;

    /* Disparamos uma mensagem com a indicação abaixo */
    set_flash_message("Utilizador autenticado com sucesso!");

    /* Redirecionamos o utilizador para a página de dashboard */
    url_redirect(['route' => 'dashboard']);
} else {
    /* Disparamos uma mensagem com a indicação abaixo */
    set_flash_message("Utilizador ou senha incorreta, tente novamente!");

    /* Redirecionamos o utilizador para a página de login */
    url_redirect(['route' => 'login']);
}

