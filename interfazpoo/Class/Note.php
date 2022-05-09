<?php
class Note
{
    private string $nombre;
    private float $nota;
    private string $materia;

    public function __construct(string $nombre='', float $nota=0, string $materia='')
    {
        $this->nombre = $nombre;
        $this->nota = $nota;
        $this->materia=$materia;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre(string $nombre)
    {
        $this->nombre=$nombre;
    }
    public function getNota()
    {
        return $this->nota;
    }
    public function setNota(float $nota)
    {
        $this->nota=$nota;
    }
    public function getMateria()
    {
        return $this->materia;
    }
    public function setMateria(string $materia)
    {
        $this->materia=$materia;
    }
    
    public function estado()
    {
        switch ($this->getNota()) {
            case 1:
            case 2:
            case 3:
                echo "REPROBÓ 😐";
                break;
            case 4:
            case 5:
                echo "APROBÓ 😄";
                break;
            default:
                echo "Ingresó un valor fuera del rango";
                break;
        }
    }

}