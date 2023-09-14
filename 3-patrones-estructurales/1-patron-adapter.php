<?php

/* Clase León */
class Leon
{
    public function rugir()
    {
        return "Rugido de león";
    }
}

/* Clase Gato */
class Gato
{
    public function maullar()
    {
        return "Miau";
    }
}

/* Creación del Adptador */
class LeonAdapter extends Gato
{
    protected $leon;

    public function __construct(Leon $leon)
    {
        $this->leon = $leon;
    }

    public function maullar()
    {
        return $this->leon->rugir();
    }
}


/* Ejecución */
$leon = new Leon();
$leonAdaptado = new LeonAdapter($leon);

echo $leonAdaptado->maullar(); // Rugido de león