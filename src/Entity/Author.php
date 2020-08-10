<?php

namespace App\Entity;

use App\Repository\AuthorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AuthorRepository::class)
 */
class Author
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
    private $name;
    
    /**
     *
     * @var Post
     * 
     * @ORM\OneToMany(targetEntity="App\Entity\Post", mappedBy="author")
     */
    private $posts;
    
    function getId() {
        return $this->id;
    }

    function getName(){
        return $this->name;
    }

    function getPosts() {
        return $this->posts;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setName(string $name){
        $this->name = $name;
    }

    function setPosts(Post $posts) {
        $this->posts = $posts;
    }


}
