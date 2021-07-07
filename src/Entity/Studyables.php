<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Studyables
 *
 * @ORM\Table(name="studyables", uniqueConstraints={@ORM\UniqueConstraint(name="title", columns={"title"})})
 * @ORM\Entity
 */
class Studyables
{
    /**
     * @var int
     *
     * @ORM\Column(name="studyable_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $studyableId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="body", type="text", length=65535, nullable=true)
     */
    private $body;


}
