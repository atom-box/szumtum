<?php
namespace App\Entity;

use App\Repository\StudyableRepository;
use Doctrine\ORM\Mapping as ORM;
/*
  _____  ______ _____    _____  ______ _____         _______ _____  
 |  __ \|  ____|  __ \  |  __ \|  ____/ ____|     /\|__   __|  __ \ 
 | |  | | |__  | |__) | | |__) | |__ | |         /  \  | |  | |  | |
 | |  | |  __| |  ___/  |  _  /|  __|| |        / /\ \ | |  | |  | |
 | |__| | |____| |      | | \ \| |___| |____   / ____ \| |  | |__| |
 |_____/|______|_|      |_|  \_\______\_____| /_/    \_\_|  |_____/ 
*/


/**
 * @ORM\Entity(repositoryClass=StudyableRepository::class)
 */
class Studyable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $body;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $qAndAs = [];

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $summary;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getQAndAs(): ?array
    {
        return $this->qAndAs;
    }

    public function setQAndAs(?array $qAndAs): self
    {
        $this->qAndAs = $qAndAs;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }
}
/*
  _____  ______ _____    _____  ______ _____         _______ _____  
 |  __ \|  ____|  __ \  |  __ \|  ____/ ____|     /\|__   __|  __ \ 
 | |  | | |__  | |__) | | |__) | |__ | |         /  \  | |  | |  | |
 | |  | |  __| |  ___/  |  _  /|  __|| |        / /\ \ | |  | |  | |
 | |__| | |____| |      | | \ \| |___| |____   / ____ \| |  | |__| |
 |_____/|______|_|      |_|  \_\______\_____| /_/    \_\_|  |_____/ 
*/