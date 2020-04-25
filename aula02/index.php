<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula02 PHP (24 abril)</title>
</head>
<body>
   <h1>Loops e Funções</h1>
   <p>Loops - FOR </p>

    Crie um loop que exiba os números de 1 a 10 utlizando a estrutura FOR. <br><br>
    
   <?php 
        /* o for é um método de estrutura de repetição. que recebe três parâmetros, onde o primeiro é o critério de início da nossa variável contadora, ou seja, com qual valor ela vai começar a percorrer o loop FOR.
        Já o segundo parâmetro, é o critério de parada do nosso loop FOR.
        O terceiro parâmetro é o critério de incremento se for ++ ou decremento se for -- */
        for ($i=1; $i <= 10; $i++) {  
           echo $i . "<br>";
           /* echo - return the value of i and print it, skipping to the next line with the <br> */
        }
   ?>

   <hr>

   Crie um loop que exiba os números de 10 a 1 utlizando a estrutura FOR. <br><br>

   <?php
        for ($i=10; $i >= 1 ; $i--) {
            echo $i . "<br>";
        }
   ?>

    <hr>

   Crie um loop que exiba os números pares que temos até 10 utlizando a estrutura FOR (incremento) com condições.<br><br>

   <?php
        for ($i=1; $i <= 10 ; $i++) {
            if($i %2 == 0){
                /* se a divisão do numero i com 2 restante é 0, passa na fórmula */
                echo $i . "<br>";   
            }           
        }
   ?>

<hr>

Crie um loop que exiba os números pares que temos até 10 utlizando a estrutura FOR.(incremento) sem criar condições <br><br>

<?php
     for ($i=2; $i <= 10 ; $i = $i + 2) {
        echo $i . "<br>";         
     }
?>

<hr>

<p>Loops - WHILE </p>

   Crie um loop que exiba os números de 1 a 10, utilizando o WHILE(incremento). <br><br>

   <?php
        /* INformamos uma condição dentro do while e ela sempre será verificada a cada loop realizado, enquanto a condição for verdadeira, ele iorá repetir o bloco de codigo dentro do while.
        Podemos pensar que ele tem uma diferença que é a parte do incremento, ou seja, no WHILE, não podemos esquecer de incrementar/decrementar nossa variável qu está sendo verificada na condição  */
        $i = 1;
        while ($i <= 10) {
            /* enquanto o i for melhor/igual a 10, ele vai exibir o valor de i através do echo, enquanto incrementa 1 até alcançar o valor 10. 
            Se não adicionar o incremento i++, fica infinito pq não alcança o valor maximo definido */
            echo $i . "<br>";
            $i++;
        }
   ?>

    <hr>

    Crie um loop que exiba os números de 10 a 1 utlizando o WHILE(decremento) <br><br>

    <?php
        $i = 10;
        while ($i >= 1) {
            echo $i . "<br>";
            $i--;
        }
        /* O i vale 10, e enquanto o i for maior ou igual a i, vai exibir o i
        e vai decrementando até chegar o valor minimo = 1 */
    ?>

   <hr>

    <p>Loops - Do While</p>

    Crie um loop que exiba os números de 1 a 10 utilizando do while (incemento). <br>

    <?php
        /* funciona de uma forma que primeiro indica ao código para executar as intruções dentro do bloco de código DO, e depois ele verifica a condição que foi criada no WHILE, desta forma, podemos perceber que sempre será executado ao menos uma vez o código quando trabalhamos com DO WHILE.
        Afinal de contas, ele executa primeiro para depois verificar a condição que foi criada no WHILE.*/
        /* Não podemos esquecer de incrementar ou decrementar nossa  variável que está sendo verificada na condição.
        Também devemos nos atentar que a nossa variável que vai ser comparada na condição dentro d oDO WHILE deverá existir antes e ter algum valor.
         */

        $i = 1;
        do {
            echo $i . "<br>";
            $i++;
        } while ($i <= 10);
    ?>

    <hr>

    Crie um loop que exiba os números de 10 a 1 utilizando do while (decremento). <br>

    <?php
        $i = 10;
        do {
            echo $i . "<br>";
            $i--;
        } while ($i >= 1);

    ?>

    <hr>

    <h1>Lopps - Percorrendo ARRAYS</h1>

    <p>FOR- Percorrendo Array</p>

    <p>Percorra o array de animais abaixo utilizando FOR.</p>
    <p style='padding: 5px;background-color:#f5f5f5;border-radius:10px;color:blue;line-height:20px;font-size:16px'> $animais = ["Gato", "Cachorro", "Leão", "Girafa"];</p>

    <?php
    // criando o array de animais
         $animais = ["Gato", "Cachorro", "Leão", "Girafa"];
    ?>
    
    <?php
    // Percorrendo o array de animais com o loop FOR
        echo count($animais) . "<br>";
        // count($array) em PHP é equivalente ao array.length do JS (mumuki)
        
        //retorna quantos elementos tem dentro da array
        /* indicando que a variável $i deve ser menor que o count de elementos do array. e nunca menor igual.
        pois como o array começa com o primeiro elementos obtendoa posição 0, podemos pensar que um array como o array que contenha 4 elementos como o array de naimais, possui as poisções 0,1,2 e 3 onde 0 possio o ínmdice GATO, 1 = CACHORRO, 2 = LEAO, 3 =GIRAFA.
        A partir disso, sabemos que o i deve começar em 0 e ser menor que o count do nosso array que retorna 4.
        Sendo assim o FOR terá a repsonsabilidade de pegar as posições de 0 até 3, e desta forma, obteremos todos elementos do array.*/
        for ($i=0; $i < count($animais); $i++) { 
            echo $animais[$i] . "<br>";
        }
    ?>

    <hr>
    <p>WHILE - Percorrendo Array</p>
    <p>Percorra o arrayt de animais abaixo utilizando WHILE</p>

    <p style='padding: 5px;background-color:#f5f5f5;border-radius:10px;color:blue;line-height:20px;font-size:16px'> $animais = ["Gato", "Cachorro", "Leão", "Girafa"];</p>

    <?php
        $i = 0;
        while ($i < count($animais)) {
            echo $animais[$i] . "<br>";
            $i++;
        }
    ?>

    <hr>
    <p>WHILE - Percorrendo Array</p>
    <p>Percorra o arrayt de animais abaixo utilizando WHILE</p>

    <p style='padding: 5px;background-color:#f5f5f5;border-radius:10px;color:blue;line-height:20px;font-size:16px'> $animais = ["Gato", "Cachorro", "Leão", "Girafa"];</p>

    <?php
        $i = 0;
        while ($i < count($animais)) {
            echo $animais[$i] . "<br>";
            $i++;
        }
    ?>

    <hr>
    <p>FOREACH - Percorrendo Array</p>
    <p>Percorra o array de animais abaixo utilizando FOREACH, utilizando a sintaxe de posição e valor, e retorne a seguinte frase "Posição: x Índice: y", onde x e y serão substituídos pelas posições e índices do array de animais</p>

    <p style='padding: 5px;background-color:#f5f5f5;border-radius:10px;color:blue;line-height:20px;font-size:16px'> $animais = ["Gato", "Cachorro", "Leão", "Girafa"];</p>
  
    <?php
        /* O FOREACH recebe um array objeto, no nosso caso iremos informar um ARRAY.
        Sabemos que o FOREACH tem um formato onde ele pega a posição e o índice do elemento corrente */

        /* Para cada elemento = FOREACH
        Para cada elemento, cria uma variável $posicao contendo o valor da posição daquele elemento dentro do array e também cria a variável $indice  contendo o valor do índice do elemento percorrido dentro do array.*/
        
        /* Ou seja, no futuro ao executar o código do foreach abaixo, teremos as variáveis posição  e índice com estes valores abaixo:

          posição / índice 
            0 = GATO
            1 = CACHORRO
            2 = LEÃO 
            3 = GIRAFA
        */
        foreach ($animais as $posicao => $indice) {
            echo "Posição: " . $posicao . " Índice: " . $indice . "<br>"; 
        }
    ?>

    <hr>

    <p>FOREACH - Percorrendo Array</p>
    <p>Percorra o array de animais abaixo utilizando FOREACH, utilizando a sintaxe de valor</p>

    <p style='padding: 5px;background-color:#f5f5f5;border-radius:10px;color:blue;line-height:20px;font-size:16px'> $animais = ["Gato", "Cachorro", "Leão", "Girafa"];</p>
  
    <?php
    /* `Para cada elemento, cria a variável $animal, contendo o valor do índice do elemento percorrido dentro da array

    Ou seja, nmo futuro ao aexecutar o código do foreach percorrendo o array de animais, teremos a variável $animal com estes valores abaixo:
    /* 
        animal:
        Gato
        Cachorro
        Leao
        Girafa
     */
        
        foreach ($animais as $animal) {
            echo $animal . "<br>"; 
        }
    ?>
    
</body>
</html>