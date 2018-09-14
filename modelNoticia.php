<?php
    include'noticia.php';

    class modelNoticia{
        
        public function adicionarNoticia(noticia $noticia){
            include 'db.php':
            
            $query = "INSERT INTO noticia(titulo,sub-titulo,conteudo,data,imagem)
                VALUES (:titulo,:sub-titulo,:conteudo,:data,:imagem)";
            
            $statement= $connection->prepare($query);
        
        
            $valores = array;
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
        
        public function listar(noticia $noticia){
            include 'db.php';
            
            $query = "SELECT id, titulo, sub-titulo, conteudo, data, imagem e FROM noticia";
            
            $statement = $connection->prepare($query);
            
            $result = $statement->execute();
            
            $u = $result[0];
            echo $u['titulo'];
            
            $u = $result[1];
            echo $u['sub-titulo'];
            
            $u = $result[2];
            echo $u['conteudo'];
            
            $u = $result[3];
            echo $u['data'];
            
            $u = $result[4];
            echo $u['imagem'];
            
            $result = $statement->fetchAll();
            
            return $result;
        }
                
        public function editar(noticia $noticia){
        include 'db.php';
        
        
        $query = "UPDATE noticia SET titulo = :titulo, sub-titulo = :sub-titulo, conteudo=:conteudo, data=:data, imagem=:imagem WHERE id = :id";
        
            $statement= $connection->prepare($query);

            $valores = array();
            $valores[':titulo'] = $noticia->getTitulo();
            $valores[':sub-titulo'] = $noticia->getSub-titulo();
            $valores[':conteudo'] = $noticia->getConteudo();
            $valores[':data'] = $noticia->getData();
            $valores[':imagem'] = $noticia->getImagem();
            $valores[':id'] = $noticia->getId();

            $result = $statement->execute($valores);

                if(  empty($result)  ){
                    echo "Alterar noticia deu erro.";
                }else{
                    echo "Alterar noticia deu certo.";
                } 
            }

        public function remover($id){
        include 'db.php';
        
            $query = "DELETE FROM noticia WHERE id = :id";

            $statement = $connection->prepare($query);


            $valores = array();
            $valores[':id'] = $id;

            $result = $statement->execute($valores);


            if(  empty($result)  ){
                echo "Remover noticia deu erro.";
            }else{
                echo "Remover noticia deu certo.";
            }         

    
    }
        
        
        
        
        
        
    }
        
    


?>