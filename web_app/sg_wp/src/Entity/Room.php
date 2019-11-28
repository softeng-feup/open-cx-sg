<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoomRepository")
 */
class Room
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
    private $seats;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $seats_occupied;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $map_pose;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $id_code;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSeats(): ?int
    {
        return $this->seats;
    }

    public function setSeats(?int $seats): self
    {
        $this->seats = $seats;

        return $this;
    }

    public function getSeatsOccupied(): ?int
    {
        return $this->seats_occupied;
    }

    public function setSeatsOccupied(?int $seats_occupied): self
    {
        $this->seats_occupied = $seats_occupied;

        return $this;
    }

    public function getMapPose(): ?int
    {
        return $this->map_pose;
    }

    public function setMapPose(?int $map_pose): self
    {
        $this->map_pose = $map_pose;

        return $this;
    }

    public function getIdCode(): ?string
    {
        return $this->id_code;
    }

    public function setIdCode(?string $id_code): self
    {
        $this->id_code = $id_code;

        return $this;
    }
}
