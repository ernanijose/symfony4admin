<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $title;
    
    /**
     *
     * @var string
     * @ORM\Column(type="text")
     */
    private $content;
    
    /**
     *
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $status;
    
    /**
     *
     * @var Category
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="posts")
     */
    private $category;
    
    function getId() {
        return $this->id;
    }

    function getTitle(): string {
        return $this->title;
    }

    function getContent(): string {
        return $this->content;
    }

    function getStatus(): boolean {
        return $this->status;
    }

    function getCategory(): Category {
        return $this->category;
    }

    function setTitle(string $title): void {
        $this->title = $title;
    }

    function setContent(string $content): void {
        $this->content = $content;
    }

    function setStatus(boolean $status): void {
        $this->status = $status;
    }

    function setCategory(Category $category): void {
        $this->category = $category;
    }


}
