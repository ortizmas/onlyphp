<?php
declare(strict_types = 1);

namespace Ortizmas\Poo;

class PhysicalPerson
{
    private string $name;
    private string $email;
    private int $old;

    // Usar set e get sempre que a propriedade é privada
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setOld(int $old): void
    {
        $this->old = $old;
    }

    public function getOld()
    {
        return $this->old;
    }
}
