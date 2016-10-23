<?php

namespace GenererLeCrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terrain
 */
class Terrain
{
	public function __toString()
	{
		return ($this->getName());
	}
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $icao;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $departingFlights;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $arrivingFlights;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departingFlights = new \Doctrine\Common\Collections\ArrayCollection();
        $this->arrivingFlights = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return Terrain
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set icao
     *
     * @param string $icao
     * @return Terrain
     */
    public function setIcao($icao)
    {
        $this->icao = $icao;

        return $this;
    }

    /**
     * Get icao
     *
     * @return string 
     */
    public function getIcao()
    {
        return $this->icao;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Terrain
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Terrain
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Terrain
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Terrain
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add departingFlights
     *
     * @param \GenererLeCrudBundle\Entity\Flight $departingFlights
     * @return Terrain
     */
    public function addDepartingFlight(\GenererLeCrudBundle\Entity\Flight $departingFlights)
    {
        $this->departingFlights[] = $departingFlights;

        return $this;
    }

    /**
     * Remove departingFlights
     *
     * @param \GenererLeCrudBundle\Entity\Flight $departingFlights
     */
    public function removeDepartingFlight(\GenererLeCrudBundle\Entity\Flight $departingFlights)
    {
        $this->departingFlights->removeElement($departingFlights);
    }

    /**
     * Get departingFlights
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepartingFlights()
    {
        return $this->departingFlights;
    }

    /**
     * Add arrivingFlights
     *
     * @param \GenererLeCrudBundle\Entity\Flight $arrivingFlights
     * @return Terrain
     */
    public function addArrivingFlight(\GenererLeCrudBundle\Entity\Flight $arrivingFlights)
    {
        $this->arrivingFlights[] = $arrivingFlights;

        return $this;
    }

    /**
     * Remove arrivingFlights
     *
     * @param \GenererLeCrudBundle\Entity\Flight $arrivingFlights
     */
    public function removeArrivingFlight(\GenererLeCrudBundle\Entity\Flight $arrivingFlights)
    {
        $this->arrivingFlights->removeElement($arrivingFlights);
    }

    /**
     * Get arrivingFlights
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArrivingFlights()
    {
        return $this->arrivingFlights;
    }
}
