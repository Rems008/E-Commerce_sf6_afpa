<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $naname = null;

    #[ORM\ManyToOne(inversedBy: 'images')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Product $products = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaname(): ?string
    {
        return $this->naname;
    }

    public function setNaname(string $naname): self
    {
        $this->naname = $naname;

        return $this;
    }

    public function getProducts(): ?Product
    {
        return $this->products;
    }

    public function setProducts(?Product $products): self
    {
        $this->products = $products;

        return $this;
    }
}
