<?php
declare(strict_types = 1);

namespace Ortizmas\Poo\Models;

class PhysicalPerson extends People
{
    const OBJECT_TYPE = 'Ser Humano';
    private static string $name = "";
    private string $email;
    private int $old;
    public int $cpf;

    public function __construct(
        string $name = '',
        string $email = '',
        int $old = 0,
        int $cpf = 0
    ) {
        self::$name = $name;
        $this->email = $email;
        $this->old = $old;
        $this->cpf = $cpf;
    }

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

    public function setCpf(int $cpf): static
    {
        $this->cpf = $cpf;
        return $this;
    }

    public static function getAllData(string $name): static
    {
        self::$name = $name;
        // return self::$name . ' - ' . self::OBJECT_TYPE;
        // Enviar por parametro todos os argumentos, ou definir o valor por default nas variables no construct
        return new Static();
    }

    public static function getInformation(string $name): string
    {
        self::$name = $name;
        return self::$name . ' - ' . self::OBJECT_TYPE;
    }

    public function getDocument(): int
    {
        return $this->cpf;
    }
}



