<?php

namespace App\Entity\Holiday;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author
 *
 * @ORM\Table(name="holiday")
 * @ORM\Entity(repositoryClass="App\Repository\Holiday\Holidays")
 */
class Holiday
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="numberOfDays", type="integer")
     */
    private $numberOfDays;

    /**
     * @var int
     *
     * @ORM\Column(name="dateFrom", type="date")
     */
    private $dateFrom;


    /**
     * @var int
     *
     * @ORM\Column(name="dateTo", type="date")
     */
    private $dateTo;

    /**
     * @ORM\ManyToOne(targetEntity="HolidayType", inversedBy="holiday_types")
     * @ORM\JoinColumn(name="typeId", referencedColumnName="id")
     */
    private $typeId;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=100)
     */
    private $comment;


    /**
     * @var int
     *
     * @ORM\Column(name="createdAt", type="datetime",options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt;


    /**
     * @var int
     *
     * @ORM\Column(name="updatedAt", type="datetime",columnDefinition="DATETIME on update CURRENT_TIMESTAMP")
     */
    private $updatedAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getNumberOfDays():? int
    {
        return (int) $this->numberOfDays;
    }

    /**
     * @param int $numberOfDays
     */
    public function setNumberOfDays(int $numberOfDays)
    {
        $this->numberOfDays = $numberOfDays;
    }

    /**
     * @return int
     */
    public function getDateFrom(): int
    {
        return $this->dateFrom;
    }

    /**
     * @param int $dateFrom
     */
    public function setDateFrom(int $dateFrom)
    {
        $this->dateFrom = $dateFrom;
    }

    /**
     * @return int
     */
    public function getDateTo(): int
    {
        return $this->dateTo;
    }

    /**
     * @param int $dateTo
     */
    public function setDateTo(int $dateTo)
    {
        $this->dateTo = $dateTo;
    }

    /**
     * @return mixed
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param mixed $typeId
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;
    }

    /**
     * @return string
     */
    public function getComment():? string
    {
        return (string) $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedAt(int $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getUpdatedAt(): int
    {
        return $this->updatedAt;
    }

    /**
     * @param int $updatedAt
     */
    public function setUpdatedAt(int $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

}
