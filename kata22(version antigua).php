<?php

class GeneradorVoluntarios {
    public string $alumno;
    public $tareasPendientes = ["masterclass", "atajo configuracion"];

    public function __construct($alumno, $tareasPendientes) {
        $this->alumno = $alumno;
        $this->tareasPendientes = $tareasPendientes;
    }

    public function generarVoluntario() {
        $tareaAleatoria = $this->tareasPendientes[array_rand($this->tareasPendientes)];
        echo $this->alumno, " debe hacer la tarea: ", $tareaAleatoria;
    }
}

$alumnos = new GeneradorVoluntarios("Paco", ["masterclass", "atajo configuracion"]);

$alumnos->generarVoluntario();

?>
