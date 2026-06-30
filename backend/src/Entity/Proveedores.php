<?php

namespace App\Entity;

use App\Repository\ProveedoresRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use phpDocumentor\Reflection\Types\Integer;

#[ORM\Entity(repositoryClass: ProveedoresRepository::class)]
class Proveedores
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::INTEGER)]
    private ?integer $codigo_id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $nif = null;

    #[ORM\OneToMany(targetEntity: Productos::class, mappedBy: 'proveedor')]
    private Collection $productos;

    public function __construct()
    {
        $this->productos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigoId(): ?string
    {
        return $this->codigo_id;
    }

    public function setCodigoId(Integer $codigo_id): static
    {
        $this->codigo_id = $codigo_id;

        return $this;
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

    public function getNif(): ?string
    {
        return $this->nif;
    }

    public function setNif(string $nif): static
    {
        $this->nif = $nif;

        return $this;
    }

    public function getProductos(): Collection
    {
        return $this->productos;
    }

    public function addProducto(Productos $producto): static
    {
        if (!$this->productos->contains($producto)) {
            $this->productos->add($producto);
            $producto->setProveedor($this);
        }
        return $this;
    }

    public function removeProducto(Productos $producto): static
    {
        if ($this->productos->removeElement($producto)) {
            
            if ($producto->getProveedor() === $this) {
                $producto->setProveedor(null);
            }
        }
        return $this;
    }
}
