<?php
class Calculadora
{
    private  $num1;
    private  $num2;
    

    public function __construct( $num1=0,$num2=0)
    {
        $this->num1=$num1;
        $this->num2=$num2;

        
    }
        public function setnum1( $num1)
        {
            $this->num1=$num1;
        }
        public function getnum1()
        {
            return $this->num1;
        }
        public function setnum2( $num2)
        {
            $this->num2=$num2;
        }
        public function getnum2()
        {
            return $this->num2;
        }

        public function Detalle()
        {
            echo "Nro. Cita: ".$this->num1. "<br>";
            echo "Nombre completo del paciente: ".$this->nombrePaciente. "<br>";
            echo "Nombre completo del odontologo:  ".$this->nombreOdonto. "<br>";
            echo "num2 asignada:  ".$this->num2. "<br>", "<br>";
        }
        public function Sumar($resultado,$resultado1)
        {
           
            $resultado1=intval($_POST['num1']);
            $resultado=intval($_POST['num2']);
            $suma=$resultado+$resultado1;
            echo "El resultado es de la suma es: ".$suma."<br>";
            $resta=$resultado-$resultado1;
            echo "El resultado de la resta es:".$resta."<br>";
            $multiplicacion=$resultado*$resultado1;
            echo "El resultado de la multiplicación es:".$multiplicacion."<br>";
            $division=$resultado/$resultado1;
            echo "El resultado de la division es:".$division."<br>";
            
        }
    }