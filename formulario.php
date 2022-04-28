<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="ajax.js"></script>
</head>
<body>
    <!-- 
         get dados via url
         post - dados oculto       
-->
    <form action="proc.php" method="post" enctype="multipart/form-data">
      <div>
         <label for="nome"> Nome:</label>
         <input type="text" id="nome" name="nome"/> 
          <?php
           if(isset($_GET['erro']) &&  $_GET['erro'] == "nome"){
            echo "<span style='color:red'>*</span>";
           }
         ?> 
      </div>
    
      <div>
         <label > Sexo:</label>
         <input type="radio" id="sexo" checked name="sexo" value="f"/>
          feminino
         <input type="radio" id="sexo" name="sexo" value="m"/>
          masculino
            
      </div>

      <div>
         <label for="x"> Senha:</label>
         
         <input type="password" id="x" name="senha" />
         <?php
           if(isset($_GET['erro']) &&  $_GET['erro'] == "senha" ){
            echo "<span style='color:red'>*</span>";
           }
         ?> 
            
      </div>

      <div>
          <label>Arquivo</label>
             <input type="file" name="arq" />
          </div>
       
      <input type="submit" value="Cadastro"/>
       
    

    </form>
</body>
</html>