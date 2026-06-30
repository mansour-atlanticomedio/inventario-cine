<?php

namespace App\Entity;

use App\Repository\ProductosRepository;
use Doctrine\ORM\Mapping as ORM;

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

    #[ORM\Column]
    private ?int $coste_compra = null;

    #[ORM\Column]
    private ?int $anios_amortizar = null;

    #[ORM\Column]
    private ?\DateTime $fecha_compra = null;

    #[ORM\Column]
    private ?int $prestar = null;

    #[ORM\Column(nullable: false)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 255)]
    private ?string $vida = null;

    #[ORM\Column]
    private ?\DateTime $fecha_activacion = null;

    #[ORM\Column]
    private ?int $valor = null;

    #[ORM\ManyToOne(targetEntity: Proveedores::class, inversedBy: 'productos')]
    #[ORM\JoinColumn(name: 'proveedor_id', referencedColumnName: 'id', nullable: true)]
    private ?Proveedores $proveedor = null;

    #[ORM\ManyToOne(targetEntity: Categorias::class, inversedBy:'categorias')]
    #[ORM\JoinColumn(name: 'categoria_id', referencedColumnName: 'id', nullable: false )]
    private ?Categorias $categoria = null;

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

    public function getCosteCompra(): ?int
    {
        return $this->coste_compra;
    }

    public function setCosteCompra(int $coste_compra): static
    {
        $this->coste_compra = $coste_compra;

        return $this;
    }

    public function getAniosAmortizar(): ?int
    {
        return $this->anios_amortizar;
    }

    public function setAniosAmortizar(int $anios_amortizar): static
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

    public function getPrestar(): ?int
    {
        return $this->prestar;
    }

    public function setPrestar(int $prestar): static
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

    public function getValor(): ?int
    {
        return $this->valor;
    }

    public function setValor(int $valor): static
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

    public function getCategoria(): ?Categorias
    {
        return $this->categoria;
    }

    public function setCategorias(?Categorias $categoria): static
    {
        $this->categoria = $categoria;
        return $this;
    }
}
