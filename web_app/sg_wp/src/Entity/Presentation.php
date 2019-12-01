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

    public function getIdSpeaker1()
    {
        return $this->id_speaker1;
    }

    public function setIdSpeaker1($id_speaker1)
    {
        $this->id_speaker1 = $id_speaker1;

        return $this;
    }

    public function getIdSpeaker2()
    {
        return $this->id_speaker2;
    }

    public function setIdSpeaker2($id_speaker2)
    {
        $this->id_speaker2 = $id_speaker2;

        return $this;
    }

    public function getIdSpeaker3()
    {
        return $this->id_speaker3;
    }

    public function setIdSpeaker3($id_speaker3)
    {
        $this->id_speaker3 = $id_speaker3;

        return $this;
    }

    public function getIdRoom()
    {
        return $this->id_room;
    }

    public function setIdRoom($id_room)
    {
        $this->id_room = $id_room;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    public function getStartTime()
    {
        return $this->start_time;
    }

    public function setStartTime( $start_time)
    {
        $this->start_time = $start_time;

        return $this;
    }

    public function getEndTime()
    {
        return $this->end_time;
    }

    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;

        return $this;
    }

    public function getHashtag()
    {
        return $this->hashtag;
    }

    public function setHashtag($hashtag)
    {
        $this->hashtag = $hashtag;

        return $this;
    }
}
