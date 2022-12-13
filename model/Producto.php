<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Producto
 *
 * @author wadmin
 */

namespace model;

abstract class Producto implements \interfaces\IComparar {

    public const MIN_STOCK = 1000;

    protected int $id;
    private static int $unidades = self::MIN_STOCK;
    protected string $nombre;
    protected float $precio;

    public function __construct(int $id, string $nombre, float $precio) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getId(): int {
        return $this->id;
    }

    public static function getUnidades(): int {
        return self::$unidades;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public static function setUnidades(int $unidades): void {
        self::$unidades = $unidades;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setPrecio(float $precio): void {
        $this->precio = $precio;
    }


    public function comparar($prod): int {
        if (is_a($prod, __CLASS__)) {
            return $this->precio <=> $prod->precio;
        } else {
            throw new \excepciones\NotSuitableClassException(get_class($prod));
        }
    }

    public function __toString() {
        $cadena = "Id:" . $this->getId() . "<br/>";
        $cadena .= "Nombre:" . $this->getNombre() . "<br/>";
        $cadena .= "Precio:" . $this->getPrecio() . "<br/>";
     
        return $cadena;
    }

}
