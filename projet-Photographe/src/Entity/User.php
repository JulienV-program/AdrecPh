<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $Tel;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $Password;

    /**
     * @ORM\Column(type="integer")
     */
    private $Access;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Date_inscription;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Adress", mappedBy="User", orphanRemoval=true)
     */
    private $adresses;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LivreDOr", mappedBy="User")
     */
    private $livreDOrs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Galery", inversedBy="users")
     */
    private $Galery;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commande", mappedBy="User")
     */
    private $commandes;

    public function __construct()
    {
        $this->adresses = new ArrayCollection();
        $this->livreDOrs = new ArrayCollection();
        $this->commandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->Tel;
    }

    public function setTel(?string $Tel): self
    {
        $this->Tel = $Tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getAccess(): ?int
    {
        return $this->Access;
    }

    public function setAccess(int $Access): self
    {
        $this->Access = $Access;

        return $this;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->Date_inscription;
    }

    public function setDateInscription(\DateTimeInterface $Date_inscription): self
    {
        $this->Date_inscription = $Date_inscription;

        return $this;
    }

    /**
     * @return Collection|Adress[]
     */
    public function getAdresses(): Collection
    {
        return $this->adresses;
    }

    public function addAdress(Adress $adress): self
    {
        if (!$this->adresses->contains($adress)) {
            $this->adresses[] = $adress;
            $adress->setUser($this);
        }

        return $this;
    }

    public function removeAdress(Adress $adress): self
    {
        if ($this->adresses->contains($adress)) {
            $this->adresses->removeElement($adress);
            // set the owning side to null (unless already changed)
            if ($adress->getUser() === $this) {
                $adress->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|LivreDOr[]
     */
    public function getLivreDOrs(): Collection
    {
        return $this->livreDOrs;
    }

    public function addLivreDOr(LivreDOr $livreDOr): self
    {
        if (!$this->livreDOrs->contains($livreDOr)) {
            $this->livreDOrs[] = $livreDOr;
            $livreDOr->setUser($this);
        }

        return $this;
    }

    public function removeLivreDOr(LivreDOr $livreDOr): self
    {
        if ($this->livreDOrs->contains($livreDOr)) {
            $this->livreDOrs->removeElement($livreDOr);
            // set the owning side to null (unless already changed)
            if ($livreDOr->getUser() === $this) {
                $livreDOr->setUser(null);
            }
        }

        return $this;
    }

    public function getGalery(): ?Galery
    {
        return $this->Galery;
    }

    public function setGalery(?Galery $Galery): self
    {
        $this->Galery = $Galery;

        return $this;
    }

    /**
     * @return Collection|Commande[]
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->setUser($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->contains($commande)) {
            $this->commandes->removeElement($commande);
            // set the owning side to null (unless already changed)
            if ($commande->getUser() === $this) {
                $commande->setUser(null);
            }
        }

        return $this;
    }
}