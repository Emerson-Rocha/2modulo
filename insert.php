<?php
require("conecta.php");
//include("conecta.php");
//include_once("conecta.php");
//require_once("conecta.php");


// criar uma variavel de string e resulta em sql

$sqlInsert = "insert into tb_usuario
 (nome_us, emai_us)
 values('Victor','victor@etec.com'),
       ('thales','thales@etec.com')";

  $resp = mysqli_query($con,$sqlInsert);

   if($resp){
      echo "Cadastro feito com sucesso";
      mysqli_close($con);
      
   }else{
       echo mysqli_connect_error();
   }


?>