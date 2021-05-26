<?php
function diasUteis($prazo)
{
    $data_hoje = date("Y/m/d"); // Dia atual
    $data_calc = $data_hoje; // Instancia a variável $data_calc com a data de hoje
    $data_passe = $data_hoje; // Instancia a variável $data_passe com a data de hoje
    $a = 1; // Instancia a variável $a para o while

    while ($a < $prazo) {
        $data_passe = date("Y-m-d", strtotime($data_passe . '+ 1 days')); // data passe fica responsável por ir contando os dias independente de ser útil ou não
        if (date('w', strtotime($data_passe)) > 0 && date('w', strtotime($data_passe)) < 6) { // Agora ele verifica se a data_passe é dia de semana 
            $data_calc = date("Y-m-d", strtotime($data_passe . '+ 1 days')); // se for ele soma um dia na data_calc que é o nosso valor final
            ++$a; // acrescenta a volta no loop
        }
    }

    return $data_calc; // retorna o valor para seu código
}
