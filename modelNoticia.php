<?php
    include'noticia.php';

    class modelNoticia{
        
        public function adicionarNoticia(noticia $noticia){
            include 'db.php':
            
            $query = "INSERT INTO noticia(titulo,sub-titulo,conteudo,data,imagem)
                VALUES (:titulo,:sub-titulo,:conteudo,:data,:imagem)";
            
            $statement= $connection->prepare($query);
        
        
            $valores array
            $valores[':titulo'] = $user->getTitulo();
            $valores[':sub-titulo'] = $user->getsub-Titulo();
            $valores[':conteudo'] = $user->getConteudo();
            $valores[':data'] = $user->getData();
            $valores[':imagem'] = $user->getImagem();
        
            $result = $tatement->execute($valores);
        
            if( empty($result)  ){
                echo"Inserir notícia deu errror.";
                print_r($statement->erroInfo());
            }else{
                echo "Inserir usuáqrio deu certo."
            }
        }
        
        public function editar(noticia $noticia){
            include 'db.php';
            
            $query = "UPDATE users SET titlo,sub-titulo,conteudo,data,imagem FROM users";
            $statement
        }
        
        
        
        
        }
        
        
        
        
    }
        
    


?>