<?php
declare(strict_types = 1);

namespace Ortizmas\Poo\Models;

class JuridicPerson extends People
{
    // DRY = Don't repeat yourself (Não se repita)
    public int $cnpj;

    public function getDocument(): int
    {
        return $this->cnpj;
    }

}



