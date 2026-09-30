<?php
function usuarioController()
{
    echo "6. Real Playboys tem time pronto para jogo.<br>";
    $jogadores = usuarioService();
    echo "8. Real Playboys vence por 11 x 0.<br>";
    echo "Gênios escalados:<br>";
    foreach ($jogadores as $jogadores) {
        echo "-" . $jogadores . "<br>";
    }
}
