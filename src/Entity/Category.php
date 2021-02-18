<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Integer;

/**
 * @ORM\Entity
 * @ORM\Table (name="category")
 */
class Category
{
    /**
     * @ORM\Column(type="integer", name="id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(length=255, name="name", options={"comment": "Название категории"})
     */
    private $name;

    /**
     * @ORM\Column(type="text", name="description", length=500, options={"comment": "Описание категории"})
     */
    private $description;

    /**
     * @return mixed
     */
    public function getId() : Integer
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $value
     */
    public function setName(string $value) : void
    {
        $this->name = $value;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $value
     */
    public function setDescription(string $value) : void
    {
        $this->name = $value;
    }
}
