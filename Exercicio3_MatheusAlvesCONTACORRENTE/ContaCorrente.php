<?php
    class ContaCorrente{
        private $usuario;
        private $saldo;
        private $datac;
        
        public function ContaCorrente($p, $s, $d){
            $this->usuario = $p;
            $this->saldo = $s;
            $this->datac = $d;
        }

        public Function getUsuario(){
            return $this->usuario;
        }

        public Function setUsuario($p){
            $this->usuario = $p;
        }

        public Function getSaldo(){
            return $this->saldo;
        }

        public Function setSaldo($s){
            $this->saldo = $s;
        }

        public Function getDataC(){
            return $this->datac;
        }

        public Function setDataC($d){
            $this->datac = $d;
        }

        public function checar($valor)
        {
            if($this->saldo - $valor < 0){
                return false;
            }else{
                return true;
            }
        }
        
        public function sacar($saque){
            $conf = $this->checar($saque);
            if($conf == true){
                $this->saldo -= $saque;
                echo "<br/>Saque realizado com sucesso";
            }else{
                echo "<br/>Saque invalido, reinicie e tente novamente {X}";
            }
        }
        
        public function deposito($dep)
        {
            $this->saldo += $dep;
            echo "<br/>Deposito realizado com sucesso";
        }

        public function transferir($trans){
            $conf = $this->checar($trans);
            if($conf == true){
                $this->saldo -= $trans;
                echo "<br/>Transferencia realizada com sucesso";
            }else{
                echo "<br/>Transferencia não aprovada {X}";
            }
        }

    }
?>