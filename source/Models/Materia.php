<?php

   namespace Source\Models;

   use CoffeeCode\DataLayer\DataLayer;
use DateTime;
use Seld\PharUtils\Timestamps;

class Materia extends DataLayer
{
    public function __construct()
    {
        parent::__construct("materias", ["id_professor"], "id", false);
    }

    public function add(Professor $professor, string $materia): Materia
    {
        $this->id_professor = $professor->id;
        $this->materia = $materia;

        return $this;
    }

}