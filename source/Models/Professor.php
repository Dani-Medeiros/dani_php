<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Professor extends DataLayer
{
    public function __construct()
    {
        parent::__construct("professores", ["nome", "cpf", "turno"]);
    }

    public function materias()
    {
        return (new Materia())->find("id_professor = :uid", "uid={$this->id}")->fetch(true);
    }

    /* public function save(): bool
    {
        // Verifico email
        parent::save();
    } */
}