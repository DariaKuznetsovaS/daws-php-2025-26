<?php
class Publicacion {
    private $autores;
    private $anio;
    private $editorial;
    private $titulo;
    private $texto;


    public function __construct($autores, $anio, $editorial, $titulo, $texto) {
        $this->autores = $autores;
        $this->anio = $anio;
        $this->editorial = $editorial;
        $this->titulo = $titulo;
        $this->texto = $texto;
    }

    public function leer() {
        echo $this->texto;
    }

    public function escribir($texto) {
        $cadena = $_GET['cadena'] ?? '';
        echo ' ' . $texto . ' ' . $cadena . ' ';
    }

    public function setTexto(string $texto): void {
        $this->texto = $texto;
    }

    public function getTexto() {
        return $this->texto;
    }
}


$libro = new Publicacion("Autor Ejemplo", 2025, "Editorial X", "Título del Libro", "Texto inicial");


$libro->setTexto("Soy un texto del libro");


$libro->leer();

echo "<br>";


$libro->escribir("Contenido adicional");

$revista = new Publicacion("Telecirco",2000,"Mediaset", "Revista para bobos","Chismes");

$revista->leer();
$revista->escribir("Texto adicional de revista");

?>
