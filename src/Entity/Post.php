<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

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
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $status = true;
    
    /**
     *
     * @var Category
     * @ORM\ManyToMany(targetEntity="App\Entity\Category", inversedBy="posts")
     * @ORM\JoinTable(name="category_post")
     */
    private $category;
    
    /**
     *
     * @var Author
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Author", inversedBy="posts")
     */
    private $author;
    
    public function getId() {
        return $this->id;
    }

    public function getTitle(): ?string {
        return $this->title;
    }

    public function getContent(): ?string {
        return $this->content;
    }

    public function getStatus(): ?bool {
        return $this->status;
    }

    public function getCategory(): ?PersistentCollection {
        return $this->category;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function setContent(string $content) {
        $this->content = $content;
    }

    public function setStatus(bool $status) {
        $this->status = $status;
    }

    public function setCategory(Category $category) {
        $this->category = $category;
    }
    
    public function getAuthor(): ?Author {
        return $this->author;
    }

    public function setAuthor(Author $author){
        $this->author = $author;
    }

}
