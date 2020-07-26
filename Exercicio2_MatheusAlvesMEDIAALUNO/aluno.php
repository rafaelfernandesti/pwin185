<?php
    class Aluno{
        private $nome;
        private $b1;
        private $b2;
        private $b3;
        private $b4;
        private $media;

        public function Aluno($nome, $n1, $n2, $n3, $n4){
            $this->nome = $nome;
            $this->b1 = $n1;
            $this->b2 = $n2;
            $this->b3 = $n3;
            $this->b4 = $n4;

            $this->media = ($this->b1 + $this->b2 + $this->b3 + $this->b4) / 4;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getBimestre1(){
            return $this->b1;
        }
        public function getBimestre2(){
            return $this->b2;
        }
        public function getBimestre3(){
            return $this->b3;
        }
        public function getBimestre4(){
            return $this->b4;
        }
        public function getMedia()
        {
            return $this->media;
        }

        public function setNome($n){
            $this->nome = $n;
        }

        public function setBimestre1($b1){
            $this->bimestre1 = $b1;
        }

        public function setBimestre2($b2){
            $this->bimestre2 = $b2;
        }

        public function setBimestre3($b3){
            $this->bimestre3 = $b3;
        }

        public function setBimestre4($b4){
            $this->bimestre4 = $b4;
        }

        public function setMedia($m)
        {
         $this->media = $m;
        }

        public function mencao()
        {
            if ($this->media < 5) {
                return 'I';
            }elseif ($this->media < 7) {
                return 'R';
            }elseif ($this->media < 9) {
                return 'B';
            }else {
                return 'MB';
            }
        }
    }
?>
