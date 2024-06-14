<?php

namespace Model;

class Paquete extends ActiveRecord{
    protected static $tabla = 'paquetes';
    protected static $columnasDB = ['id', 'nombre'];

    public $id;
    public $nombre;
    public $paquete;
    public function __construct($args = [])
    {        
        $this->paquete = $args['paquete'] ?? '';
    }

    }