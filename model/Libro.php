<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace model;

/**
 * Description of Libro
 *
 * @author wadmin
 */
class Libro extends Producto {

    private array $autores;

    public function __construct(int $id, string $nombre, float $precio, array $autores = []) {
        parent::__construct($id, $nombre, $precio);

        $this->autores = $autores;
        
    }
    
     public function __toString(): string {
        $cadena = parent::__toString();
        $cadena .= "Autores: " . implode(", ", $this->autores) . " <br/>";
        $cadena .= "------------ <br/>";
        return $cadena;
    }
    
    public function getAutores(): array {
        return $this->autores;
    }

    public function setAutores(array $autores): void {
        $this->autores = $autores;
    }



}
