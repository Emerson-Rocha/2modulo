<?php 
 //
 require("conecta.php");

 // exibir todos os registro da tabela usuario

 $sqlSelect = " SELECT * FROM TB_USUARIO ";

  // executar no banco 
  $resp =  mysqli_query($con, $sqlSelect);
 
  // quanto resgistro tem a tabela
  echo mysqli_num_rows($resp);
 // exibir  valores na tabela

 //$campo = mysqli_fetch_assoc($resp);
echo "<br>";
 // exibir 
// echo $campo["nome_us"]."<br>";

 while ($campo = mysqli_fetch_assoc($resp)) {
    echo " nome :" . $campo["nome_us"] .
    " email :" . $campo["emai_us"] ."<br>";
 }
 
 while($indece = mysqli_fetch_row($resp)){
    echo "Nome : " . $indece[1].
          "email: " . $indece[2]."<br>"; 

 }


?>