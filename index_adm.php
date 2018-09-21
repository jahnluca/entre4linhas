<?php 

    include 'noticia/controllerNoticia.php';

   // set_include_path(ini_get("controllerNoticia.php")."C:\xampp\htdocs\entre4linhas");
?>				
<!DOCTYPE html>
<html> 
	<head>
            <meta charset="UTF-8">
    
        <link href="css/bootstrap.min.css" rel="stylesheet" >
        
        
        <link href="css/meuestilo.css" rel="stylesheet">
    </head>
	<body>
	   <div class="container-fluid">
        <form method="POST" action =" ">
          
            
        <!-- CAMPO TITULO -->    
        <div class="form-group">
            <label for="Titulo">Titulo da noticia:</label>
            <input type="text" class="form-control" id="Titulo" name="Titulo" aria-describedby="TituloHelp" placeholder="Digite o titulo da noticia">
            <small id="tituloHelp" class="form-text text-muted">Preencha com o titulo da noticia.</small>
          </div>
            
        <!-- CAMPO SUB-TITULO -->    
        <div class="form-group">
            <label for="sub-Titulo">Sub-Titulo:</label>
            <input type="text" class="form-control" id="sub-Titulo" name="sub-Titulo" aria-describedby="sub-TituloHelp" placeholder="Digite o sub-titulo da noticia">
            <small id="sub-TituloHelp" class="form-text text-muted">Preencha apenas o sub-titulo da noticia.</small>
          </div>
            
        <!-- CAMPO CONTEUDO -->    
        <div class="form-group">
            <label for="Conteudo">Conteudo</label>
            <input type="text" class="form-control" id="Conteudo" name="Conteudo" aria-describedby="ConteudolHelp" placeholder="Digite o conteudo da noticia">
            <small id="Conteudo" class="form-text text-muted">Preencha apenas o conteudo da noticia.</small>
          </div>
            
            
            
            <!-- CAMPO DATA -->
          <div class="form-group">
            <label for="Data">Data:</label>
            <input type="Date" class="Date->format( 'd/m/Y' )"id="Data" placeholder="Data da noticia">
          </div>
          
            <!-- CAMPO IMAGEM -->
          <div class="form-group">
            <label for="iMAGEM">imagem:</label>
            <input type="image" class=" "id="imagem" placeholder="Imagem da noticia">
          </div>
            
          <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar Noticia</button>
        </form>
        
        
        
           
        </div>
	</body>    
</html>