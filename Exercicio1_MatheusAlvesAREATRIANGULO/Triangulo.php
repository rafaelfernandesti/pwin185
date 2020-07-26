<?php
    class triangulo{
        private $base;
		private $alt;
        public function triangulo($a, $b){
            $this->alt = $a;
            $this->base = $b;
        }
        public function getBase(){
            return $this->base;
        }
        public function getAltura(){
            return $this->alt;
        }
        public function setBase($b){
            $this->base = $b;
        }
        public function setAltura($a){
            $this->alt = $a;
        }
        public function area(){
            return (($this->base * $this->alt)/2);
        }
		
		
		
        public function imprime(){
            echo "A base do triangulo é," . $this->base . " a altura é, " . $this->alt . " e ele possui uma area de,  ";
        }}
