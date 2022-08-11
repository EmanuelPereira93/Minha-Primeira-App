<?php

function url_redirect($values = []) {


    $buildQueryString = http_build_query($values);


    header('Location: htpp://localhost/?' . $buildQueryString);

    exit;
}

?>