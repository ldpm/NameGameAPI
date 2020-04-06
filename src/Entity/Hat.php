<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiSubresource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\HatRepository")
 */
class Hat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdDate;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Name", mappedBy="hat")
     * @ApiSubresource()
     */
    private $names;

    public function __construct()
    {
        $this->names = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedDate(): ?\DateTimeInterface
    {
        return $this->createdDate;
    }

    public function setCreatedDate(\DateTimeInterface $createdDate): self
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @return Collection|Name[]
     */
    public function getNames(): Collection
    {
        return $this->names;
    }

    public function addName(Name $name): self
    {
        if (!$this->names->contains($name)) {
            $this->names[] = $name;
            $name->setHat($this);
        }

        return $this;
    }

    public function removeName(Name $name): self
    {
        if ($this->names->contains($name)) {
            $this->names->removeElement($name);
            // set the owning side to null (unless already changed)
            if ($name->getHat() === $this) {
                $name->setHat(null);
            }
        }

        return $this;
    }
}
