<?php

namespace App\Entity;

use App\Repository\CategoriasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriasRepository::class)]
class Categorias
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column]
    private ?int $prestar = null;

    #[ORM\ManyToOne(targetEntity:Usuarios::class, inversedBy: 'usuarios')]
    #[ORM\JoinColumn( name: 'idresponsable', referencedColumnName:'id', nullable: true)]
    private ?string $responsable = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getPrestar(): ?int
    {
        return $this->prestar;
    }

    public function setPrestar(int $prestar): static
    {
        $this->prestar = $prestar;

        return $this;
    }

    public function getResponsable(): ?int
    {
        return $this->responsable;
    }

    public function setResponsable(int $responsable): static
    {
        $this->responsable = $responsable;

        return $this;
    }

}
