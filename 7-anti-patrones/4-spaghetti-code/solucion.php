<?php
// TODO ESTO SE DIVIDE EN VARIOS ARCHIVOS SIGUIENDO EL PATROÓN MVC, ESTO ES SOLO UNA MUESTRA

// CONTROLADOR
$datos = $form->getValues();
if ($validador->validar($datos)) {
    $reporte->generar(); // Genera y envia emails
    return view('exito');
} else {
    return view('form');
}

// VISTA
// html con plantilla

// MODELO
class Reporte
{
    public function generar()
    {
        // lógica envio emails
    }
}
