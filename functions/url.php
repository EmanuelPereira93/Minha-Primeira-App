<?php

function url_redirect($values = []) {
  
    $buildQueryString = http_build_query($values);

    header('Location: http://localhost/exemplos/minha-primeira-app?' . $buildQueryString);

    exit; 
}
      