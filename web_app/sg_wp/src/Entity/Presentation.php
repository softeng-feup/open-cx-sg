<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PresentationRepository")
 */
class Presentation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_speaker1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_speaker2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_speaker3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_room;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $summary;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $start_time;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $end_time;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $hashtag;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSpeaker1(): ?int
    {
        return $this->id_speaker1;
    }

    public function setIdSpeaker1(?int $id_speaker1): self
    {
        $this->id_speaker1 = $id_speaker1;

        return $this;
    }

    public function getIdSpeaker2(): ?int
    {
        return $this->id_speaker2;
    }

    public function setIdSpeaker2(?int $id_speaker2): self
    {
        $this->id_speaker2 = $id_speaker2;

        return $this;
    }

    public function getIdSpeaker3(): ?int
    {
        return $this->id_speaker3;
    }

    public function setIdSpeaker3(?int $id_speaker3): self
    {
        $this->id_speaker3 = $id_speaker3;

        return $this;
    }

    public function getIdRoom(): ?int
    {
        return $this->id_room;
    }

    public function setIdRoom(?int $id_room): self
    {
        $this->id_room = $id_room;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

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

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->start_time;
    }

    public function setStartTime(?\DateTimeInterface $start_time): self
    {
        $this->start_time = $start_time;

        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->end_time;
    }

    public function setEndTime(?\DateTimeInterface $end_time): self
    {
        $this->end_time = $end_time;

        return $this;
    }

    public function getHashtag(): ?string
    {
        return $this->hashtag;
    }

    public function setHashtag(?string $hashtag): self
    {
        $this->hashtag = $hashtag;

        return $this;
    }
}
