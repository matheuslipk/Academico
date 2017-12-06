<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
      <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <title>Título do site</title>
   </head>
   <body class="cyan">
      <div class="container">
         <div class="row white z-depth-4">
            <div>
               <h1 class="center-align center-block">Entrar no sistema</h1>
            </div>
            <form class="col m10 push-m1 s12 center-align ">
               <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  <input type="text" class="validate" name="usuario">
                  <label>Nome</label>
               </div>

               <div class="input-field">
                  <i class="material-icons prefix">lock</i>
                  <input type="password" class="validate" name="senha">
                  <label>Senha</label>
               </div>

               <div>
                  <input id="teste" type="checkbox" name="esqueci" class="filled-in">
                  <label for="teste">Entrar automaticamente da próxima vez</label>
               </div>

               <button class="btn waves-effect waves-light" type="submit" name="action">
                  Login<i class="material-icons right">send</i>
               </button>
            </form>
         </div>
      </div>
   </body>
</html>
