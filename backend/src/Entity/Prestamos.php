<?php

namespace App\Entity;

use App\Repository\PrestamosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrestamosRepository::class)]
class Prestamos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTime $fecha_inicio = null;

    #[ORM\Column]
    private ?\DateTime $fecha_fin = null;

    #[ORM\Column]
    private ?int $estado = null;

    #[ORM\Column(length: 255)]
    private ?string $motivo = null;

    #[ORM\Column]
    private ?\DateTime $fecha_entrega = null;

    #[ORM\Column(length: 255)]
    private ?string $dpto = null;

    #[ORM\Column]
    private ?int $curso = null;

    #[ORM\Column]
    private ?string $motivoanular = null;

    #[ORM\ManyToOne(targetEntity:Usuarios::class, inversedBy:'usuarios')]
    #[ORM\JoinColumn(name: "usuario_id", referencedColumnName:'id', nullable: false)]
    private ?string $usuario = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaInicio(): ?\DateTime
    {
        return $this->fecha_inicio;
    }

    public function setFechaInicio(\DateTime $fecha_inicio): static
    {
        $this->fecha_inicio = $fecha_inicio;

        return $this;
    }

    public function getFechaFin(): ?\DateTime
    {
        return $this->fecha_fin;
    }

    public function setFechaFin(\DateTime $fecha_fin): static
    {
        $this->fecha_fin = $fecha_fin;

        return $this;
    }

    public function getEstado(): ?int
    {
        return $this->estado;
    }

    public function setEstado(int $estado): static
    {
        $this->estado = $estado;

        return $this;
    }

    public function getMotivo(): ?string
    {
        return $this->motivo;
    }

    public function setMotivo(string $motivo): static
    {
        $this->motivo = $motivo;

        return $this;
    }

    public function getFechaEntrega(): ?\DateTime
    {
        return $this->fecha_entrega;
    }

    public function setFechaEntrega(\DateTime $fecha_entrega): static
    {
        $this->fecha_entrega = $fecha_entrega;

        return $this;
    }

    public function getDpto(): ?string
    {
        return $this->dpto;
    }

    public function setDpto(string $dpto): static
    {
        $this->dpto = $dpto;

        return $this;
    }

    public function getCurso(): ?int
    {
        return $this->curso;
    }

    public function setCurso(int $curso): static
    {
        $this->curso = $curso;

        return $this;
    }

    public function getMotivoanular(): ?string
    {
        return $this->motivoanular;
    }

    public function setMotivoanular(string $motivoanular): static
    {
        $this->motivoanular = $motivoanular;

        return $this;
    }

    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    public function setUsuario(string $usuario): static
    {
        $this->usuario = $usuario;

        return $this;
    }

}
