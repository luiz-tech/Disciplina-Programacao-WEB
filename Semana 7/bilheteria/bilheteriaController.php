<?php

function validaidade($idade){

            $preco = 15.00 ;

            // 30% de desconto de 10 - 17 anos
            if(($idade >= 10) and ($idade < 18)){
              $preco = number_format($preco - ($preco * 0.3),2);
            } 
              // 30% de desconto para maiores de 18
              else if($idade >= 10) {
                $preco = number_format($preco - ($preco * 0.1),2);
              }   //classificação proibida para menores de 10 anos
                else {
                  return 'Você não possui idade sulficiente para assistir essa programação.';
                }
   
   return $preco;
}


function compraProduto(){

	
}

?>