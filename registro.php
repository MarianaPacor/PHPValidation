<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Digital House</title>
    <!-- Link do Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Links do Bootstrap JS  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">

   <!-- Aula 06 - 12/07/2018 -->

   <!-- Exercício 1  -->
     <div class="col-lg-12">
         <?php
            $titulo = "Formulario PHP";
         ?>
         <h1><?php echo $titulo; ?></h1>
     </div>
 <?php

    // Criando o array de países para o exercício 2 - d
        $array = ["Brasil",
            "Uruguai",
            "França",
            "Itália",
            "Paraguai",
            "Inglaterra",
            "Suíça",
            "Holanda",
             "México",
             "Portugal"
       ];
   ?>

   <!-- Exercício 2 - Criando o formulário -->
   <form action="confirmacao.php" method="POST">
     <div class="col-lg-12">
       <br>
           <div class="col-lg-3">
            <label>Nome: </label>
            <input type="text" class="form-control" name="nome">
          </div>
          <div class="col-lg-4">
            <label>Sobrenome: </label>
            <input type="text" class="form-control" name="sobrenome">
          </div>
          <div class="col-lg-5">
            <label>Conheceu através de:</label>
              <input type="checkbox" style="margin-top:30px;" name="conheceu[]" value="jornal">Jornal
              <input type="checkbox" style="margin-left: 10px;" name="conheceu[]" value="revista">Revista
              <input type="checkbox" style="margin-left: 10px;" name="conheceu[]" value="outros">Outros
          </div>
      </div>
      <div class="col-lg-12">
        <br>
          <div class="col-lg-3">
              <label>Email: </label>
              <input type="email" class="form-control" name="email">
          </div>
          <div class="col-lg-4">
              <label>Senha: </label>
              <input type="password" class="form-control" name="senha">
          </div>
          <div class="col-lg-4">
              <label>Confirme sua Senha: </label>
              <input type="password" class="form-control" name="confirma_senha">
          </div>
      </div>
      <div class="col-lg-12">
          <br>
          <div class="col-lg-3">
              <label>Informe o ano do seu nascimento: </label>
              <input type="text" class="form-control" name="idade">
          </div>
          <!-- Criando o select para percorrer o array com os países -->
          <div class="col-lg-3">
            <label>Nacionalidade: </label>
                <select name="nacionalidade" class="form-control">
                   <?php
                     foreach ($array as $valor){
                        echo "<option value='$valor'>$valor</option>";
                     }
                   ?>
               </select>
          </div>
          <div class="col-lg-2">
              <input type="submit" name="enviar" style="margin-top:25px;" class="btn btn-primary" value="Enviar Informações">
          </div>
      </div>
   </form>
   <br>
   <!-- Exercícios complementares -->

     <!-- Exercício 1 -->
         <div class="col-lg-12">
             <?php
                 // $faq = [
                 //     ["pergunta" => "Quanto é 1 + 1?", "resposta" => "2"],
                 //     ["pergunta" => "Quanto é 2 + 2?", "resposta" => "4"]
                 // ];

                 // foreach ($faq as $key => $value) {
                 //   echo "Question: ". $value["pergunta"] . " <br>Answer: " . $value["resposta"] . "<br>";
                 // }
             ?>
         </div>

       <!-- Exercício 2 -->
           <div class="col-lg-12">
               <?php
                   // $cor = ['Branco', 'Verde', 'Vermelho'];
                   // foreach ($cor as $value) {
                   //    echo "<li>$value</li>";
                   // }
               ?>
            </div>

        <!-- Exercício 3 -->
            <div class="col-lg-12">
              <?php
                  // $cor = ['Branco' => '#fff', 'Verde' => '#008000', 'Vermelho' => '#f00'];
                  // foreach ($cor as $key => $value) {
                  //    echo "<li style='color:$value;'>$key</li>";
                  // }
              ?>
            </div>
      </div>
  </body>
</html>
