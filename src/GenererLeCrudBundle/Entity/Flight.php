<?php

namespace GenererLeCrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flight
 */
class Flight
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $departure;

    /**
     * @var string
     */
    private $arrival;

    /**
     * @var string
     */
    private $pilot;

    /**
     * @var int
     */
    private $freeSeats;

    /**
     * @var \DateTime
     */
    private $takeofTime;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set departure
     *
     * @param string $departure
     * @return Flight
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return string 
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param string $arrival
     * @return Flight
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return string 
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set pilot
     *
     * @param string $pilot
     * @return Flight
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return string 
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set freeSeats
     *
     * @param integer $freeSeats
     * @return Flight
     */
    public function setFreeSeats($freeSeats)
    {
        $this->freeSeats = $freeSeats;

        return $this;
    }

    /**
     * Get freeSeats
     *
     * @return integer 
     */
    public function getFreeSeats()
    {
        return $this->freeSeats;
    }

    /**
     * Set takeofTime
     *
     * @param \DateTime $takeofTime
     * @return Flight
     */
    public function setTakeofTime($takeofTime)
    {
        $this->takeofTime = $takeofTime;

        return $this;
    }

    /**
     * Get takeofTime
     *
     * @return \DateTime 
     */
    public function getTakeofTime()
    {
        return $this->takeofTime;
    }
    /**
     * @var \GenererLeCrudBundle\Entity\Terrain
     */
    private $terrainDeparture;

    /**
     * @var \GenererLeCrudBundle\Entity\Terrain
     */
    private $terrainArrival;


    /**
     * Set terrainDeparture
     *
     * @param \GenererLeCrudBundle\Entity\Terrain $terrainDeparture
     * @return Flight
     */
    public function setTerrainDeparture(\GenererLeCrudBundle\Entity\Terrain $terrainDeparture = null)
    {
        $this->terrainDeparture = $terrainDeparture;

        return $this;
    }

    /**
     * Get terrainDeparture
     *
     * @return \GenererLeCrudBundle\Entity\Terrain 
     */
    public function getTerrainDeparture()
    {
        return $this->terrainDeparture;
    }

    /**
     * Set terrainArrival
     *
     * @param \GenererLeCrudBundle\Entity\Terrain $terrainArrival
     * @return Flight
     */
    public function setTerrainArrival(\GenererLeCrudBundle\Entity\Terrain $terrainArrival = null)
    {
        $this->terrainArrival = $terrainArrival;

        return $this;
    }

    /**
     * Get terrainArrival
     *
     * @return \GenererLeCrudBundle\Entity\Terrain 
     */
    public function getTerrainArrival()
    {
        return $this->terrainArrival;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reservations;

    /**
     * @var \GenererLeCrudBundle\Entity\PlaneModel
     */
    private $planeModel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reservations
     *
     * @param \GenererLeCrudBundle\Entity\Reservation $reservations
     * @return Flight
     */
    public function addReservation(\GenererLeCrudBundle\Entity\Reservation $reservations)
    {
        $this->reservations[] = $reservations;

        return $this;
    }

    /**
     * Remove reservations
     *
     * @param \GenererLeCrudBundle\Entity\Reservation $reservations
     */
    public function removeReservation(\GenererLeCrudBundle\Entity\Reservation $reservations)
    {
        $this->reservations->removeElement($reservations);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Set planeModel
     *
     * @param \GenererLeCrudBundle\Entity\PlaneModel $planeModel
     * @return Flight
     */
    public function setPlaneModel(\GenererLeCrudBundle\Entity\PlaneModel $planeModel = null)
    {
        $this->planeModel = $planeModel;

        return $this;
    }

    /**
     * Get planeModel
     *
     * @return \GenererLeCrudBundle\Entity\PlaneModel 
     */
    public function getPlaneModel()
    {
        return $this->planeModel;
    }
}
