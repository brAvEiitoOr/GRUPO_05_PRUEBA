<?php
    include_once("figura.php");

    class Trapecio extends Figura {

        public function __construct($a,$b,$c,$d)
        {
            $this->nLados = 4;
            $this->lados = array($a,$b,$c,$d);
        }

        public function calcularArea(){
            // Usando fórmula de Herón
            $m = $this->lados[0]-$this->lados[1];
            $s = ($m+$this->lados[2]+$this->lados[3])/2;
            $at = ($s*($s-$m)*($s-$this->lados[2])*($s-$this->lados[3]))^(1/2);
            $h = (2*$at)/$m;
            $this->area = $h*($this->lados[0]+$this->lados[1])/2;
            return $this->area;
        }
        public function get_form(){
			$html = '
            <form action="enviar.php" method="post">
                <input class="form-control my-2" type="number" name="lado1" id="lado1" placeholder="Base inferior">
                <input class="form-control my-2" type="number" name="lado2" id="lado2" placeholder="Base superior">
                <input class="form-control my-2" type="number" name="lado3" id="lado3" placeholder="Lado 1">
                <input class="form-control my-2" type="number" name="lado4" id="lado4" placeholder="Lado 2">
                <button type="submit" class="btn btn-primary my-2" id="submitBtn"lado>Enviar</button>
            </form>
			';
			return $html;
		}
    }

    class Rombo extends Figura{
        private $d,$D;
        public function __construct($a,$d,$D)
        {
            $this->nLados = 4;
            $this->lados = array($a,$a,$a,$a);
        }
        public function calcularArea(){
            $this->area = ($this->d*$this->D)/2;
            return $this->area;
        }
        public function get_form(){
			$html = '
            <form action="enviar.php" method="post">
                <input class="form-control my-2" type="number" name="lado1" id="lado1" placeholder="Lado">
                <input class="form-control my-2" type="number" name="d1" id="d1" placeholder="Diámetro mayor">
                <input class="form-control my-2" type="number" name="d2" id="d2" placeholder="Diámetro menor">
                <button type="submit" class="btn btn-primary my-2" id="submitBtn"lado>Enviar</button>
            </form>
			';
			return $html;
		}
    }

    class Romboide extends Figura{
        private $h;
        public function __construct($a,$b,$h)
        {
            $this->nLados = 4;
            $this->lados = array($a,$b,$a,$b);
        }
        public function calcularArea(){
            $this->area = $this->a*$this->h;
            return $this->area;
        }
        public function get_form(){
			$html = '
            <form action="enviar.php" method="post">
                <input class="form-control my-2" type="number" name="lado1" id="lado1" placeholder="Base">
                <input class="form-control my-2" type="number" name="lado2" id="lado2" placeholder="Lado">
                <input class="form-control my-2" type="number" name="lado3" id="lado3" placeholder="Altura">
                <button type="submit" class="btn btn-primary my-2" id="submitBtn"lado>Enviar</button>
            </form>
			';
			return $html;
		}
    }

?>