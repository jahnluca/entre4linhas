<?php
    include'modelNoticia.php';
    
    if(isset($_POST['cadastrar_noticia'])){
        
        $noticia = new Noticia();
    
        $noticia->setTitulo($_POST['titulo']);
        $noticia->setsub-Titulo($_POST['sub-titulo']);
        $noticia->setConteudo($_POST['conteudo']);
        $noticia->setData($_POST['data']);
        $noticia->setImage("imagem");


        $modelo = new ModelNoticia();
        $modelo->adicionar($noticia);
    }

    
    if(isset($_POST['editar_noticia'])){
        
        $noticia = new Noticia();
    
        $noticia->setId($_POST['id']);
        $noticia->setTitulo($_POST['titulo']);
        $noticia->setsub-Titulo($_POST['sub-titulo']);
        $noticia->setConteudo($_POST['conteudo']);
        $noticia->setData($_POST['data']);
        $noticia->setImage("imagem");


        $modelo = new ModelNoticia();
        $modelo->editar($noticia);
    }

    if(isset($_POST['remover_noticia'])){
        
        $noticia = new Noticia();
    
        $noticia->setId($_POST['id']);


        $modelo = new ModelNoticia();
        $modelo->remover($noticia);
    }
?>
