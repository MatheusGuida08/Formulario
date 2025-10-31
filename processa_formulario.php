<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dataNasc = $_POST['dataNasc'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$curso = $_POST['curso'];
$mensagem= $_POST['mensagem'];
$termos = isset($_POST['termos'])?'Aceito': 'Não aceito';

echo "<h1>Dados Recebidos</h1><br>";
echo "Nome: ".$nome."<br>";
echo "Email: ".$email."<br>";
echo "Senha: ".$senha."<br>";
echo "Data de Nascimento: ".$dataNasc."<br>";
echo "Telefone: ".$telefone."<br>";
echo "Genêro: ".$genero."<br>";
echo "Curso: ".$curso."<br>";
echo "Mensagem: ".$mensagem."<br>";
echo "Termo: ".$termos."<br>";


?>