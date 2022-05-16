<?php
require './Class/Database.php';
class Nota {
private string $nombre;
private string $materia;
private $nota;


public function __construct(string $nombre='',string $materia='' ,$nota=0){
    $this->nombre= $nombre;
    $this->materia=$materia;
    $this->nota=$nota;
    $database=new Database();
    $this->conexionBaseDatos=$database->conexion;
}
public function getnombre():string{
    return $this ->nombre;
}
public function setnombre(string $nombre)
{
 $this ->nombre=$nombre;
}
public function getmateria():string{
    return $this ->materia;
}
public function setmateria(string $materia)
{
 $this ->materia=$materia;
}

public function getnota(){
    return $this ->nota;
}
public function setnota( $nota){
    $this->nota=$nota;
    }
    public function estado()
    {
        switch ($this->getnota()) {
            case 0:
            case 1:
            case 2:
            case 3: 
            echo "REPROBO";  
                break;
            case 4;
            case 5;
            echo "APROBO";
            break;
            default:
                echo "Ingreso un valor fuera de rango";
                break;
        }
    }
    public function detalle(){
        echo "Nombre del alumno: " .$this->nombre."<br>";
        echo "Maria del alumno : " .$this->materia ."<br>";
        echo "Nota del alumno: " .$this-> nota."<br>";
        }
    public function saveNote(){
        try {
            $query = "INSERT INTO estudiantes (nombre, materia, nota ) VALUES (:nombre, :materia, :nota)";
            $values=[
                ":nombre" => $this ->getnombre(),
                ":materia"=> $this ->getmateria(),
                ":nota" => $this->getnota(),
                
            ];
            $consulta = $this ->conexionBaseDatos->prepare($query);
            $consulta->execute($values);
            echo"Guardado de forma exitosa";
        } catch (PDOException $error) {
            die("Error al guardar" . $error);
        }
        }
        public function listNote(){
          
            try {
                echo "<h1> lista de nombres y notas </h1>";
                $query= "SELECT * FROM estudiantes";
                $notasA =[];
                $sql = $this -> conexionBaseDatos->query($query, PDO::FETCH_ASSOC);
                foreach ($sql as $nota){
                    $notas = new  Nota();
                    echo $notas=strval($nota['nombre']) ."<br>";
                    echo $notas=strval($nota['materia']) .": ";
                    echo $notas=floatval($nota['nota'])."<br> <hr>";
                    
                    array_push($notasA,$notas);
                }
                return $notasA;
            } catch (PDOException $error) {
                die("Error al listar notas " .$error->getMessage()); 
                //throw $th;
            }
        }
        public function updateNote($nom,$mate,$not){
            try{
            $query= "UPDATE estudiantes SET nombre='$nom',materia='$mate',nota= '$not' WHERE nombre='$nom'";
                
                $consulta= $this-> conexionBaseDatos->query($query);
                if ($consulta){
                    echo "se actualizo correctamente";
                }
                else{"error al actualizar";}
                
            } catch (PDOException $error) {
                die("Error al actualizar datos del estudiante" .$error->getMessage());
            }
            }

            public function searchNote($nombre){
                try {
                    $query= "SELECT * FROM estudiantes where nombre= '$nombre'";
                    $alumno =[];
                    $sql = $this -> conexionBaseDatos->query($query, PDO::FETCH_ASSOC);
        
                    foreach ($sql as $nota){
                        $alumnoN = new  Nota();
                        echo"Nombre: ".$alumnoN->nombre =$nota['nombre'] ."<br>";
                        echo "Materia: ".$alumnoN->materia =$nota['materia'] ."<br>";
                        echo "Nota: ".$alumnoN->nota=$nota['nota']."<br><hr>";
                       
                        array_push($alumno,$alumnoN);
                    }
                    return $alumno;
                    
        
                } catch (PDOException $error) {
                    die("Error al buscar el estudiante" .$error->getMessage());
                }
                }
                public function deleteNote($nombre){
                    try {
                        echo "eliminado correctamente <br>";
                        $query= "DELETE FROM estudiantes where nombre='$nombre'";
                        $alumno =[];
                        $sql = $this -> conexionBaseDatos->query($query, PDO::FETCH_ASSOC);
            
                        foreach ($sql as $nota){
                            $alumnoA = new  Nota();
                            echo $alumnoA->nombre =$nota['nombre'] ."<br>";
                            echo $alumnoA->materia =$nota['materia'] ."<br>";
                            echo $alumnoA->nota=$nota['nota'] ."<br>";
                            
                            array_push($alumno,$alumnoA);
                        }
                        return $alumno;
            
                    } catch (PDOException $error) {
                        die("Error al borar el estudiante" .$error->getMessage());
                    }
                    }
}