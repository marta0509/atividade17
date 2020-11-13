<?php
echo "<span style='color:red;'><h3><b>****************** Página Visitante *****************</b></h3></span><br>";

session_name('VariaveisNomeIdade');
session_start();

echo "Nome: " .$_SESSION['NomeAluno']. "<br>";
echo "Idade: " .$_SESSION['IdadeAluno'];

//ou de outra forma

$nome = $_SESSION['NomeAluno'];
$idade = $_SESSION['IdadeAluno'];
echo "<br><br>";
echo "Nome: " .$nome. "<br>";
echo "Idade: " .$idade. "<br>";

/**************************APAGAR AS VARIAVEIS E DESTRUIR A SESSÃO***********************************************

unset($_SESSION['NomeAluno']);
unset($_SESSION['IdadeAluno']);

session_destroy();

*****************************************************************************************************************/

echo "<a href='formulario.html'><h5><b>Voltar</b></h5></a>";
echo "<a href='principal.php'><h5><b>Principal</b></h5></a>";
echo "<a href='principalCom_Isset_e_Empty.php'><h5><b>Principal (com Isset e Empty)</b></h5></a>";