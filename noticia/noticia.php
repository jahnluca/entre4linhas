<?php
    class Noticia{
        private $titulo;
        private $sub_titulo;
        private $conteudo;
        private $data;
        private $id;
        private $imagem;
    
    

        public function getTitulo(){
            return $this->titulo;
        }

        public function getsub_Titulo(){
            return $this->subTitulo;
        }

        public function getConteudo(){
            return $this->conteudo;
        }

        public function getData(){
            return $this->data;
        }

        public function getId(){
            return $this->id;
        }

        public function getImagem(){
            return $this->imagem;
        }

        public function setTitulo($a){
            $this->titulo = $a;
        }

        public function setsub_Titulo($a){
            $this->subTitulo = $a;
        }

       public function setConteudo($a){
            $this->conteudo = $a;
        }

        public function setData($a){
            $this->data = $a;
        }

        public function setId($a){
            $this->id = $a;
        }

        public function setImagem($a){
            $this->imagem = $a;
        }
    }
?>