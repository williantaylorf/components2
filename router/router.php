<?php

function router()
{
    echo "2. O time está treinando.<br>";
    $rota = "/jogadores";
    $parametro = "id=12345";
    middleware($rota);
}
