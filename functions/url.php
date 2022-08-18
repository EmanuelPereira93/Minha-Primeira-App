<?php

function url_redirect($values = []) {
  
    $buildQueryString = http_build_query($values);

    header('Location: http://localhost/minha_primeira_aplicacao_php' . $buildQueryString);

    exit; 
}
      