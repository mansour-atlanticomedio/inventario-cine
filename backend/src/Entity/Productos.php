<?php

namespace App\Entity;

use App\Repository\ProductosRepository;
use BcMath\Number;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Integer;

#[ORM\Entity(repositoryClass: ProductosRepository::class)]
class Productos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $num_serie = null;

    #[ORM\Column(length: 255)]
    private ?string $num_inventario = null;

    #[ORM\Column(type: Types::INTEGER)]
    private ?Integer $coste_compra = null;

    #[ORM\Column(type: Types::INTEGER)]
    private ?Integer $anios_amortizar = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $fecha_compra = null;

    #[ORM\Column(type: Types::INTEGER)]
    private ?Integer $prestar = null;

    #[ORM\Column(type: Types::TEXT, nullable: false)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 255)]
    private ?string $vida = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $fecha_activacion = null;

    #[ORM\Column(type: Types::INTEGER)]
    private ?Integer $valor = null;

    #[ORM\ManyToOne(targetEntity: Proveedores::class, inversedBy: 'productos')]
    #[ORM\JoinColumn(name: 'proveedor_id', referencedColumnName: 'id', nullable: true)]
    private ?Proveedores $proveedor = null;

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

    public function getNumSerie(): ?string
    {
        return $this->num_serie;
    }

    public function setNumSerie(string $num_serie): static
    {
        $this->num_serie = $num_serie;

        return $this;
    }

    public function getNumInventario(): ?string
    {
        return $this->num_inventario;
    }

    public function setNumInventario(string $num_inventario): static
    {
        $this->num_inventario = $num_inventario;

        return $this;
    }

    public function getCosteCompra(): ?Number
    {
        return $this->coste_compra;
    }

    public function setCosteCompra(Integer $coste_compra): static
    {
        $this->coste_compra = $coste_compra;

        return $this;
    }

    public function getAniosAmortizar(): ?Number
    {
        return $this->anios_amortizar;
    }

    public function setAniosAmortizar(Integer $anios_amortizar): static
    {
        $this->anios_amortizar = $anios_amortizar;

        return $this;
    }

    public function getFechaCompra(): ?\DateTime
    {
        return $this->fecha_compra;
    }

    public function setFechaCompra(\DateTime $fecha_compra): static
    {
        $this->fecha_compra = $fecha_compra;

        return $this;
    }

    public function getPrestar(): ?Number
    {
        return $this->prestar;
    }

    public function setPrestar(Integer $prestar): static
    {
        $this->prestar = $prestar;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getVida(): ?string
    {
        return $this->vida;
    }

    public function setVida(string $vida): static
    {
        $this->vida = $vida;

        return $this;
    }

    public function getFechaActivacion(): ?\DateTime
    {
        return $this->fecha_activacion;
    }

    public function setFechaActivacion(\DateTime $fecha_activacion): static
    {
        $this->fecha_activacion = $fecha_activacion;

        return $this;
    }

    public function getValor(): ?Number
    {
        return $this->valor;
    }

    public function setValor(Integer $valor): static
    {
        $this->valor = $valor;

        return $this;
    }

    public function getProveedor(): ?Proveedores
    {
        return $this->proveedor;
    }

    public function setProveedor(?Proveedores $proveedor): static
    {
        $this->proveedor = $proveedor;
        return $this;
    }
}
