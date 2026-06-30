<?php

namespace App\Entity;

use App\Repository\LogRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LogRepository::class)]
class Log
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $accion = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $datos = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $fecha = null;

    #[ORM\ManyToOne(targetEntity: Usuarios::class, inversedBy: 'log')]
    #[ORM\JoinColumn(name: 'usuarios_id', referencedColumnName:'id', nullable: false)]
    private ?string $usuario_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccion(): ?int
    {
        return $this->accion;
    }

    public function setAccion(int $accion): static
    {
        $this->accion = $accion;

        return $this;
    }

    public function getDatos(): ?string
    {
        return $this->datos;
    }

    public function setDatos(string $datos): static
    {
        $this->datos = $datos;

        return $this;
    }

    public function getFecha(): ?\DateTime
    {
        return $this->fecha;
    }

    public function setFecha(\DateTime $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getUsuario(): ?string
    {
        return $this->usuario_id;
    }

    public function setUsuario(string $usuario_id): static
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }


}
