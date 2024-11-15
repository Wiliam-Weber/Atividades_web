<?php

// Valores iniciais
$SALARIO1 = 1000; 
$SALARIO2 = 2000; 

// Comparações entre os valores iniciais
if ($SALARIO1 > $SALARIO2) {
    echo "O Valor da variável 1 é maior que o valor da variável 2<br>";
} elseif ($SALARIO1 < $SALARIO2) {
    echo "O Valor da variável 1 é menor que o valor da variável 2<br>";
} else {
    echo "Os valores são iguais<br>";
}

// Agora faça as operações nas variáveis
$SALARIO2 = $SALARIO1; // SALARIO2 recebe o valor de SALARIO1
$SALARIO2++; // Incrementa SALARIO2 em 1
$SALARIO1 += $SALARIO1 * 0.10; // Aumenta SALARIO1 em 10%

// Exibe os valores atualizados
echo "Após as operações:<br>";
echo "Valor Salário 1: $SALARIO1 e Valor Salário 2: $SALARIO2<br>";
?>
