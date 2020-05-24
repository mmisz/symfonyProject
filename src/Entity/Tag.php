<?php

namespace App\Entity;

use App\Repository\TagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TagRepository::class)
 * @ORM\Table(name="tags")
 */
class Tag
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=ToDoList::class, inversedBy="tags")
     */
    private $to_do_list;

    public function __construct()
    {
        $this->to_do_list = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|ToDoList[]
     */
    public function getToDoList(): Collection
    {
        return $this->to_do_list;
    }

    public function addToDoList(ToDoList $toDoList): self
    {
        if (!$this->to_do_list->contains($toDoList)) {
            $this->to_do_list[] = $toDoList;
        }

        return $this;
    }

    public function removeToDoList(ToDoList $toDoList): self
    {
        if ($this->to_do_list->contains($toDoList)) {
            $this->to_do_list->removeElement($toDoList);
        }

        return $this;
    }
}
