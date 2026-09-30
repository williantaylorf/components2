<?php

function dispatcher($rota)
{
    echo "5. O time está preparado para os jogos.<br>";
    if ($rota === "/jogadores") {
        usuarioController();
    } else {
        echo "O time não está preparado";
    }
}
