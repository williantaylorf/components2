<?php

function middleware($rota)
{
    echo "3. Treino Completo.<br>";
    $permitido = true;

    if ($permitido) {
        echo "4. Time se preparando para o jogo.<br>";
        dispatcher($rota);
    } else {
        echo "4. Time sem preparo.<br>";
    }
}
