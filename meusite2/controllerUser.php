<?php 
    include 'modelUser.php';

    if( isset($_POST['cadastrar'])){
        $user = new User();

        $senha_criptografada = password_hash( $_POST['password'], PASSWORD_DEFAULT);
        
        $user->setFirstName($_POST['first_name']);
        $user->setLastName($_POST['last_name']);
        $user->setEmail($_POST['email']);
        $user->setPassword($senha_criptografada);
        $user->setImage("2.jpg");


        $modelo = new ModelUser();
        $modelo->adicionar($user);
    }
?>