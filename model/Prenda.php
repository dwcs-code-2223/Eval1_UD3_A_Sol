<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace model;

/**
 * Description of Prenda
 *
 * @author wadmin
 */
class Prenda extends Producto {

    private string $color;

    public function __construct(int $id, string $nombre, float $precio, string $color) {
        parent::__construct($id, $nombre, $precio);
        $this->color = $color;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function __toString(): string {
        $cadena = parent::__toString();
        $cadena .= "Color: " . $this->getColor() . " <br/>";
        $cadena .= "------------ <br/>";
        return $cadena;
    }

}
