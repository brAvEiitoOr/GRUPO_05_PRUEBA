<?php

    class Figura {
        // lados de la figura
        private $lados;
        private $nLados;
        private $area;
        private $perimetro;

        // Variables para guardar funciones
        public function getLados(){
            return $this->lados;
        }

        public function getNLados(){
            return $this->nLados;
        }

        public function setLados ($lados){
            $this->nLados = count($lados);
            $this->lados = $lados;
        }

        public function calcularPer(){
            $this->perimetro = array_sum($this->lados);
            return $this->perimetro;
        }

    }
?>