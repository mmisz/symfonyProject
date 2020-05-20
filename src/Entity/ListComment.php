<?php

namespace App\Entity;

use App\Repository\ListCommentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ListCommentRepository::class)
 * @ORM\Table(name="list_comments")
 */
class ListComment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $comment;

    /**
     * @ORM\ManyToOne(targetEntity=ToDoList::class, inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $to_do_list;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getToDoList(): ?ToDoList
    {
        return $this->to_do_list;
    }

    public function setToDoList(?ToDoList $to_do_list): self
    {
        $this->to_do_list = $to_do_list;

        return $this;
    }
}
