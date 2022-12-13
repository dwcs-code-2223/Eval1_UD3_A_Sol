<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Productos EVAL 1 UD3 </h1>
        <?php
        require_once 'include/autoload.php';

        use \model\Producto;
        use \model\Prenda;
        use \model\Libro;

//Creamos 3 productos:

        $camisa = new Prenda(1, "Camisa", 19.99, "#000000");

        $autorPHP_1 = "Matt Davis";
        $autorPHP_2 = "Louis Reed";
        $autoresPHP = array($autorPHP_1, $autorPHP_2);

        $libroPHP = new Libro(2, "PHP programming language", 24.99, $autoresPHP);
        $libroJava = new Libro(3, "Java programming language", 24.99);

//Establecemos el total de productos a 800
        Producto::setUnidades(800);

        try {

            echo "Product info: $camisa";
            echo "Product info: $libroPHP";
            echo "Product info: $libroJava";

            //Reemplazar X por las unidades actuales
            //echo "Existen en total X productos <br/>   ";
            echo "Existen en total " . Producto::getUnidades() . " productos <br/>   ";

            comparar($camisa, $libroPHP);
            comparar($libroPHP, $camisa);
            comparar($libroPHP, $libroJava);

            comparar($libroPHP, new DateTimeImmutable("2022-10-2"));
        } catch (\Throwable $th) {
            echo "Se ha capturado un error/exception: " . $th->getMessage();
        }

        function comparar($obj1, $obj2) {
            $resultado = $obj1->comparar($obj2);

            if ($resultado === 0) {
                echo "Producto: " . $obj1->getNombre() . " y " . $obj2->getNombre() . " tienen el mismo precio: " . $obj1->getPrecio() . "<br/>";
            } else {
                $comparador = "mayor";
                if ($resultado === -1) {
                    $comparador = "menor";
                }
                echo "Producto: " . $obj1->getNombre() . " tiene un precio (" . $obj1->getPrecio() . ") " . $comparador . " que " . $obj2->getNombre() . " (" . $obj2->getPrecio() . ")<br/>";
            }
        }
        ?>
    </body>
</html>


