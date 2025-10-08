<?php
class Persona {
    public $nombre;
    public static $personasEnElMundo = 0;

    public function __construct($nombre) {
        $this->nombre = $nombre;
        // Incrementar contador al crear cada persona
        self::$personasEnElMundo++;
    }

    // Método estático para mostrar el total de personas
    public static function mostrarPersonas() {
        return self::$personasEnElMundo;
    }
}

$p1 = new Persona("Ana");
$p2 = new Persona("Luis");
$p3 = new Persona("María");
$p4 = new Persona("Carlos");
$p5 = new Persona("Lucía");

// Mostrar el número total de personas
echo "Número de personas: " . Persona::mostrarPersonas();
?>