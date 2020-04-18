<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP (17 abril)</title>
</head>
<body>
    <?php
        // criar uma variavel no PHP  = usar $ e nome da variavel.
        $titulo = 'Primeira Aula de PHP';
    ?>
    <h1>
        <?php
        //vai monstrar o conteudo da variavel na HTML dentro da h1 
        //para exibir algo na tela com PHP utilizamos o echo
            echo $titulo;
        ?>    
    </h1>

    <hr> 
    <!-- horizontal row, linha horixontal separacao-->

    <h1>Condicionais </h1>

    <p>IF / ELSE</p>
    <p>Crie uma condição que valide se uma pessoa pode votar ou não. De forma que se a pessoa tiver a idade entre 16 e 17 anos, OU for maior de 70 anos, iremos mostrar na tela Voto Facultativo.
    Caso contrario, se for maior de idade, iremos mostrar na tela voto obrigatoria, e caso for menor de 16, nao vota.</p>

    <?php
        function podeVotar($idadeEleitor){
            if($idadeEleitor >= 16 && $idadeEleitor < 18 || $idadeEleitor >70){
                return 'Deve Votar';
            } else if ($idadeEleitor >= 18 && $idadeEleitor <=70){
                return 'Voto Obrigatorio';
            }else{
                return 'Nao vota';
            }
        }
        // nao eh bom usar echo nessa situacao, nao tem retorno com o echo
    ?>

    R: Foi criado no codigo a função podeVotar e foi informado como parâmetro o valor 17, como resultado da função tivemos:
    <br> <?php echo podeVotar(17); ?>

    <hr>
    <p> SWITCH CASE </p>

    <p>Crie uma função que valide se um número é 0 e retorne que é igual a 0, se é 1 e retorne ique é igual a 1,
    ou se é 2 e returne que é igual a 2.
    Caso contrário, retorne que o número é maior que 2. Utilizando o switch case.
    </p>

    <?php
        function validaNumero($i){
            switch ($i) {
                case 0:
                    echo "$i igual 0";
                    break;
                case 1:
                    echo "$i igual 1";
                    break;
                case 2:
                    echo "$i igual 2";
                    break;
                default:
                    echo 'Qualquer Numero maior que 2';
                break;
            }
        }
?>

R: Foi criado no código a função validaNumero e foi informado como parâmetro o número 2, como retorno da função tivemos:
<br> <?php echo validaNumero(2); ?>

<p>Crie uma função que receba o gênero de uma pessoa, onde ela poderá informar Masculino ou Feminino.
Se informar masculino, iremos retornar a mensagem: Gênero informado foi masculino, se informar feminino, iremos retornar a mensagem: Gênero informado foi feminino.
Caso contrário, iremos retornar outros
Utilizando SWITCH CASE</p>

<?php
        function informaGenero($genero){
            switch ($genero) {
                case "masculino":
                    echo "Gênero informado foi $genero";
                    break;
                case "feminino":
                    echo "Gênero informado foi $genero";
                    break;
                default:
                    echo "$genero";
                    break;
            }
        }
?>
R: Foi criado a função informaGenero e como parâmetro  a string feminino, como retorno da função tivemos:
<br> <?php echo informaGenero("feminino"); ?>

<hr>

<h1>Array simples</h1>

<?php 
    //declarando array vazio
    $animais = [];

    //array simples so tem os valores, nao nos preocupamos em controlar suas posições
    $animais = ['Leão', 'Girafa', "Cachorro", "Gato"];
    //forma de bebugar variaveis nho php para sabero tipo, valores, tamanho dos valores
    echo "<prep>";
        var_dump($animais);
    echo "</prep>";

?>

<p>Array Associativo</p>

<p>Ocorre quando encessitamos adicionar valores para as posicoes do nosso array </p>

<?php 
    //o array associativo nos da a possibilidade de atribuir valores as nossas posições
    $usuario = [
        'nome' => 'Rawr',
        'email' => 'rawr@rawr.com',
        'senha' => '123456'
    ];
    //percorrendo array usuario para destrinchar o conteudo
    echo "<prep>";
        var_dump($usuario);
    echo "</prep>";

    //montando frase pegando uma posicao do array sem percorrer ele todo
    echo 'O nome do usuario: ' .$usuario['nome'];

?>

<p>Array de Arrays</p>

<p>Ocorre quando temos um array que dentro dele contem outros elementos, onde cada elemento possui como valor um novo array relacionado a ele.</p>
<?php
    $listaDeUsuarios = [
        'usuario1' => [
            'nome' => 'Rawr',
            'email' => 'rawr@rawr.com',
            'senha' => '123456'
        ],
        'usuario2' => [
            'nome' => 'Bleh',
            'email' => 'Bleh@rawr.com',
            'senha' => '123456'
        ]
    ];

    //var_dump ($listaDeUsuarios['$usuario1']);
    echo 'Nome do usuario1: '. $listaDeUsuarios['usuario1']['nome'] . 'Nome usuario2: '. $listaDeUsuarios['usuario2']['nome']
?>

    
</body>
</html>