<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backpacks
 *
 * @ORM\Table(name="backpacks", uniqueConstraints={@ORM\UniqueConstraint(name="backpack_id", columns={"backpack_id"})})
 * @ORM\Entity
 */
class Backpacks
{
    /**
     * @var int
     *
     * @ORM\Column(name="backpack_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $backpackId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="studyable_id", type="integer", nullable=true)
     */
    private $studyableId;

    public function getBackpackId(): ?string
    {
        return $this->backpackId;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getStudyableId(): ?int
    {
        return $this->studyableId;
    }

    public function setStudyableId(?int $studyableId): self
    {
        $this->studyableId = $studyableId;

        return $this;
    }


}
