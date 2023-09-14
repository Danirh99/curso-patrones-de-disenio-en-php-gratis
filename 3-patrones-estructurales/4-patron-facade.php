<?php

/* Imaginemos un subsistema para enviar emails: */
class Remitente
{
    public function enviar($email)
    {
        // Envía el email
    }
}

class Formateador
{
    public function formatear($contenido)
    {
        // Da formato al contenido
    }
}

class Conexion
{
    public function conectar()
    {
        // Abre conexión
    }
}

/* Podemos crear una Facade que utilice estas clases: */
class EmailFacade
{

    protected $remitente;
    protected $formateador;
    protected $conexion;

    public function __construct()
    {
        $this->remitente = new Remitente();
        $this->formateador = new Formateador();
        $this->conexion = new Conexion();
    }

    public function enviarEmail($contenido, $destinatario)
    {
        $this->conexion->conectar();
        $contenidoFormateado = $this->formateador->formatear($contenido);
        $this->remitente->enviar($destinatario, $contenidoFormateado);
    }
}

/* Ejecución */
$facade = new EmailFacade();
$facade->enviarEmail("Hola mundo", "destinatario@email.com");
