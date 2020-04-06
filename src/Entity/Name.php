<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\NumericFilter;
use ApiPlatform\Core\Annotation\ApiSubresource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\NameRepository")
 * @ApiFilter(BooleanFilter::class, properties={"isGotten"})
 * @ApiFilter(NumericFilter::class, properties={"playerId", "hatId"})
 */
class Name
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isGotten;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Player", inversedBy="names")
     * @ORM\JoinColumn(nullable=false)
     */
    private $owner;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Hat", inversedBy="names")
     * @ORM\JoinColumn(nullable=false)
     */
    private $hat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getIsGotten(): ?bool
    {
        return $this->isGotten;
    }

    public function setIsGotten(bool $isGotten): self
    {
        $this->isGotten = $isGotten;

        return $this;
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

    public function getHatId(): ?int
    {
        return $this->hatId;
    }

    public function setHatId(int $hatId): self
    {
        $this->hatId = $hatId;

        return $this;
    }

    public function getOwner(): ?Player
    {
        return $this->owner;
    }

    public function setOwner(?Player $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getHat(): ?Hat
    {
        return $this->hat;
    }

    public function setHat(?Hat $hat): self
    {
        $this->hat = $hat;

        return $this;
    }
}
