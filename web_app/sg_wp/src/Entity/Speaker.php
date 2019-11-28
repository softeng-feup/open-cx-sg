<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpeakerRepository")
 */
class Speaker
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo_location;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $search_area;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $job_details;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linked_in_profile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhotoLocation(): ?string
    {
        return $this->photo_location;
    }

    public function setPhotoLocation(?string $photo_location): self
    {
        $this->photo_location = $photo_location;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSearchArea(): ?string
    {
        return $this->search_area;
    }

    public function setSearchArea(?string $search_area): self
    {
        $this->search_area = $search_area;

        return $this;
    }

    public function getJobDetails(): ?string
    {
        return $this->job_details;
    }

    public function setJobDetails(?string $job_details): self
    {
        $this->job_details = $job_details;

        return $this;
    }

    public function getLinkedInProfile(): ?string
    {
        return $this->linked_in_profile;
    }

    public function setLinkedInProfile(?string $linked_in_profile): self
    {
        $this->linked_in_profile = $linked_in_profile;

        return $this;
    }
}
