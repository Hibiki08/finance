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
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(length=255, options={"comment": "Название категории"})
     */
    private $name;

    /**
     * @ORM\Column(type="text", length=500, options={"comment": "Описание категории"})
     */
    private $description;

    /**
     * @ORM\Column(type="smallint", options={"comment": "1 - доход; 2 - расход"})
     */
    private $type;

    const TYPE_INCOME = 1;
    const TYPE_EXPENDITURE = 2;

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

    /**
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }

    /**
     * @param int $value
     */
    public function setType(int $value) : void
    {
        $this->type = $value;
    }
}
