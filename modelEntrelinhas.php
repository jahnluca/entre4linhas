<?php 
    include 'modelentrelinhas.php';


    $user = new User();
    
    $user->setFirstTitulo($_POST['First_Titulo']);
    $user->setLastsubTitulo($_POST['last_subTitulo']);
    $user->setConteudo($_POST['conteudo']);
    $user->setData($_POST['data']);
    $user->setImage("".jpg");
    

    $modelo = new ModelUser();
    $modelo->adicionar($user);

?>