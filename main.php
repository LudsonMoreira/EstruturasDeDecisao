<?php
$usuario = readline("Digite seu usuário: ");
$senha = readline("Digite sua senha: ");
$idade = readline("Digite sua idade: ");

if($usuario == "admin" && $senha == 1234){
  echo "Bem-vindo $usuario";
}else if($usuario != "admin"){
  echo "O usuário está incorreto!\n";
}else if($senha != 1234){
  echo "A senha está incorreta!\n";
}else{
  echo "O usuário e a senha estão incorretos!\n";
}
