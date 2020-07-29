<?php 
    
    setcookie("Nome",$_POST['nome']);
    setcookie("Email",$_POST['email']);
    setcookie("Cidade",$_POST['cidade']);
    header('location: mensagem.php');

?>