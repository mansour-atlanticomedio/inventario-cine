<?php

namespace App\Entity;

use App\Repository\PrestamosproductosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrestamosproductosRepository::class)]
class Prestamosproductos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Prestamos::class, inversedBy:'prestamos')]
    #[ORM\JoinColumn(name: "prestamo_id", referencedColumnName: "id", nullable: true)]
    private ?Prestamos $prestamo = null;

    #[ORM\ManyToOne(targetEntity: Productos::class, inversedBy:'productos')]
    #[ORM\JoinColumn(name: "producto_id", referencedColumnName: "id", nullable: true)]
    private ?Productos $producto = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrestamo(): ?Prestamos
    {
        return $this->prestamo;
    }

    public function setPrestamo(?Prestamos $prestamo): static
    {
        $this->prestamo = $prestamo;

        return $this;
    }

    public function getProducto(): ?Productos
    {
        return $this->producto;
    }

    public function setProducto(?Productos $producto): static
    {
        $this->producto = $producto;

        return $this;
    }
}