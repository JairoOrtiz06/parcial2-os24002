<?php
namespace App\Modelos;
use App\Modelos\Laptop;
use App\Modelos\Proyector;

class EquipoAbs{
    public function __construct(
        public readonly string $nombre,
        public readonly string $codigo,
    ){}
    public  function  diasMaximoPrestamo(){
        
    }
    public function crearEquipo(string $codigo, $nombre){

        if($nombre==="laptop"){
            $laptop= new Laptop($nombre,$codigo);
            return $laptop;
        }
        
    }
 
}

?>