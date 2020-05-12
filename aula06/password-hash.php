<?php

    $exemplo = 'rasmuslerdorf'

    echo 'Exemplo sem o hash aplicado na string  $exemplo <br>';
    //criptografando a string rasmuslerdorf
    $exemploHash = password_hash($exemplo, PASSWORD_DEFAULT);

    echo 'Exenmplo com hash aplicado na string rasmuslerdorf, gerando esse hash $exemploHash;';

?>