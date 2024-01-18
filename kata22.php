<?php

class GeneradorVoluntarios {
    public string $alumno;
    public string $apellido; //añadimos apellido**

    public $tareasPendientes = ["masterclass", "atajo configuracion"];

    public function __construct($alumno,$apellido ,$tareasPendientes) {
        $this->alumno = $alumno;
        $this->apellido = $apellido;
        $this->tareasPendientes = $tareasPendientes;
    }

    public function generarVoluntario() {
        $tareaAleatoria = $this->tareasPendientes[array_rand($this->tareasPendientes)];
        echo $this->alumno," ",$this->apellido, " debe hacer la tarea: ", $tareaAleatoria .PHP_EOL;
    }
}

//leer json + json decode
$jsonData = file_get_contents('alumnos.json');

$alumnosData = json_decode($jsonData, true);

//incluir informacion de JSON alumnos en clase GeneradorVoluntarios

$alumnos = []; //Array de objetos, con info de alumnos.json
foreach ($alumnosData['alumnes'] as $alumnoData) {
    $alumno = new GeneradorVoluntarios($alumnoData['nom'],$alumnoData['cognom'], ["masterclass", "atajo configuracion"]); //instancia de la clase
    $alumnos[] = $alumno;
}

//bucle para generar voluntarios usando su respectiva funcion
foreach ($alumnos as $alumno) {
    $alumno->generarVoluntario();
}

?>
