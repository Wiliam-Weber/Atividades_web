<?php
$SALARIO1 = 1000; 
$SALARIO2 = 2000; 

// Comparação inicial entre os valores
if ($SALARIO1 > $SALARIO2) {
    echo "O Valor da variável 1 é maior que o valor da variável 2<br>";
} elseif ($SALARIO1 < $SALARIO2) {
    echo "O Valor da variável 1 é menor que o valor da variável 2<br>";
} else {
    echo "Os valores são iguais<br>";
}

// Loop de repetição para incrementar SALARIO1
for ($i = 1; $i <= 100; $i++) {
    $SALARIO1++; 

    // Verifica se a iteração é a 50
    if ($i == 50) {
        echo "Parando a execução no loop número $i<br>";
        break; // Para a execução do loop
    }
}

// Após o loop, verifica se SALARIO1 é menor que SALARIO2
if ($SALARIO1 < $SALARIO2) {
    echo "Após o loop, SALARIO1 é menor que SALARIO2. Valor final de SALARIO1: $SALARIO1<br>";
} else {
    echo "Após o loop, SALARIO1 não é menor que SALARIO2. Valor final de SALARIO1: $SALARIO1<br>";
}

?>
