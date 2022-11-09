<?php
$nome = $_POST['nome'];
$apelido= $_POST['apelido'];
$mail = $_POST['email'];
$pass = $_POST['pass'];
$morada = $_POST['morada'];
$morada2 = $_POST['morada2'];
$concelho = $_POST['concelho'];
$distrito = $_POST['distrito'];
$codigoPostal = $_POST['codPos'];
$diUser = $_POST['diUser'];
$dfUser = $_POST['dfUser'];
$check = $_POST['check'];

echo "O utilizador $nome $apelido com o email $mail, residente $morada, $morada2, concelho $concelho de $distrito $codigoPostal com data de começo $diUser e data de fim $dfUser registado: $check";

$file = fopen('../registo.txt','a+');
//if(file_exist($file)){
    $valor = "Nome: $nome $apelido\n
Email: $mail\n 
Password: $pass\n
Morada: $morada\n 
Morada2: $morada2\n
Conselho: $concelho\n 
Distrito: $distrito\n
Código Postal: $codigoPostal\n
Data Início: $diUser\n
Data Final: $dfUser\n
##################################################\n\n";
    fwrite($file, $valor);
/*}else{
    echo "<script>alert('Erro ao criar ficheiro');</script>"
}*/
fclose($file);

?>