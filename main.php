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

switch ($idade){
  case 18:
    echo "Maior de Idade!\n";
    break;
  case 17:
    echo "Menor de Idade!\n";
    break;
  default:
    echo "Não consegui classificar sua idade!\n";
    break;
}