<?php
function diasUteis($prazo)
{
    $data_hoje = date("Y/m/d"); // Dia atual
    $data_calc = $data_hoje; // Instancia a variável $data_calc com a data de hoje
    $data_passe = $data_hoje; // Instancia a variável $data_passe com a data de hoje
    $a = 1; // Instancia a variável $a para o while

    while ($a < $prazo) {
        $data_passe = date("Y-m-d", strtotime($data_passe . '+ 1 days')); // 
        if (date('w', strtotime($data_passe)) > 0 && date('w', strtotime($data_passe)) < 6) {
            $data_calc = date("Y-m-d", strtotime($data_passe . '+ 1 days'));
            ++$a;
        }
    }

    return $data_calc;
}
