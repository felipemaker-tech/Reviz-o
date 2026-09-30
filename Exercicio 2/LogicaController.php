<?php
 $numero1 = $_POST["numero1"];
  $numero2 = $_POST["numero2"];
 $operacao = $_POST["operacao"];
 switch ($operacao) { 
    case "somar":
 $resultado = $numero1 + $numero2;
  $nomeOperacao = "Soma";
   break;
   case "subtrair": 
    $resultado = $numero1 - $numero2; 
    $nomeOperacao = "Subtração";
     break;
     case "dividir": 
     if ($numero2 == 0) { 
        $resultado = "Não é possível dividir por zero.";
         } else {
         $resultado = $numero1 / $numero2; 
         } 
         $nomeOperacao = "Divisão";
          break;
           default:
            $resultado = "Operação inválida.";
             $nomeOperacao = "Erro"; 

             } 
             include "view_saida.php"; 
             ?>