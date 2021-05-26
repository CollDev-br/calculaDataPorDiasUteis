# calculaDataPorDiasUteis
Uma função básica para calculo de dias úteis, lembrando que ela não diferencia feriados.

Adicione a função no seu código e passe pelo parametro da função o valor em dias uteis.

# Linguagem:
- PHP

# Exemplo:
> calculaDataPorDiasUteis.php
```
<?php
function diasUteis($prazo)
{
    $data_hoje = date("Y/m/d");
    $data_calc = $data_hoje;
    $data_passe = $data_hoje;
    $a = 1;

    while ($a < $prazo) {
        $data_passe = date("Y-m-d", strtotime($data_passe . '+ 1 days'));
        if (date('w', strtotime($data_passe)) > 0 && date('w', strtotime($data_passe)) < 6) { 
            $data_calc = date("Y-m-d", strtotime($data_passe . '+ 1 days'));
            ++$a;
        }
    }

    return $data_calc; 
}

$diasUteisValor = 4;
echo diasUteis($diasUteisValor);
```

- Ou adicione uma class e instancie através de outro documento pelo include.
