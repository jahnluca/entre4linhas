<?php
    include 'modelNoticias.php';
    
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
?>