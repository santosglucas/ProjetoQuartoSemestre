<?php
    $dbhost = 'localhost';
    $dbusuario = 'root';
    $senha = '';
    $dbName = 'cadastro';
    

    $conexao = new mysqli($dbhost, $dbusuario, $senha, $dbName);

   // if($conexao->connect_errno){
   //     echo "erro";
   // }
   //     else{
   //         echo"o galo ganhou";
   //     }
        
    
?>