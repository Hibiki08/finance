<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="transaction")
 */
class Transaction
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"comment": "Название операции"})
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string", length=500, options={"comment": "Комментарий"})
     */
    private $comment;

    /**
     * @var int
     * @ORM\JoinColumn(name="cat_id", referencedColumnName="id", onDelete="CASCADE", nullable=false)
     * @ORM\ManyToOne(targetEntity="Category")
     */
    private $catId;

    /**
     * @var float
     * @ORM\Column(type="float", options={"comment": "сумма в рублях"})
     */
    private $amount;

    /**
     * @var int
     * @ORM\Column(type="datetime", options={"comment": "дата создания операции"})
     */
    private $date;

    /**
     * Transaction constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        $this->date = time();
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getCatId() : int
    {
        return $this->catId;
    }

    /**
     * @param int $value
     */
    public function setCatId(int $value) : void
    {
        $this->catId = $value;
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
    public function getComment() : string
    {
        return $this->comment;
    }

    /**
     * @param string $value
     */
    public function setComment(string $value) : void
    {
        $this->comment = $value;
    }

    /**
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }

    /**
     * @param float $value
     */
    public function setAmount(float $value) : void
    {
        $this->amount = $value;
    }

    /**
     * @return int
     */
    public function getDate() : int
    {
        return $this->date;
    }

    /**
     * @param int $value
     */
    public function setDate(int $value) : void
    {
        $this->date = $value;
    }
}
