<?php
echo "<span style='color:blue;'><h3><b>******************Página Principal *****************</b></h3></span><br>";

$nome = $_POST['txt_nome'];
$idade = $_POST['txt_idade'];

session_name('VariaveisNomeIdade');
session_start();

$_SESSION['NomeAluno'] = $nome;
$_SESSION['IdadeAluno'] = $idade;

/*

//outra forma...

$_SESSION['NomeAluno'] = $_POST['txt_nome'];
$_SESSION['IdadeAluno'] = $_POST['txt_idade'];

*/

echo "Nome: " .$nome. "<br>";
echo "Idade: " .$idade. "<br>";

echo "<a href='formulario.html'><h5><b>Voltar</b></h5></a>";
echo "<a href='visitante.php'><h5><b>Visitante</b></h5></a>";

?>