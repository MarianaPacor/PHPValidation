<?php

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $conheceu = $_POST['conheceu'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];
    $idade = $_POST['idade'];
    $years = date("Y") - $idade;
    $nacionalidade = $_POST['nacionalidade'];

    // Exercício 2 - b => Exibindo os dados concatenados com a frase pedida.
        // echo "Agradecemos a sua inscrição, $nome $sobrenome.
        // Você disse que tem $years anos. Registramos o seu e-mail: $email. Obrigado!";

    // echo "<br>";

    //  Exercício 2 - c => Percorrendo um foreach para exibir os checkbox que foram marcados
        // if (isset($_POST['conheceu'])){
        //   $checked = $_POST['conheceu'];
        //   foreach($checked as $valor){
        //     echo "$valor <br>";
        //   }
        // } else {
        //   echo "Você não escolheu nada !";
        // }

    // echo "<br>";

    // Exercício 4 - verificando se os dados são iguais
        // if ($senha == $confirma_senha){
        //   echo "E sua senha confere com a confirmação";
        // } else {
        //   echo "Porém sua senha não confere com a confirmação";
        // }

    // Exercício 5 - criar condição para verificar números de caracteres
        // if (strlen($nome.$sobrenome) <= 15 || $years < 18){
        //     header("Location: registro.php");
        // } else {
        //     echo "Seu nome e sobrenome somados possuem mais de 15 caracteres ou você é menor de idade";
        // }

 ?>
