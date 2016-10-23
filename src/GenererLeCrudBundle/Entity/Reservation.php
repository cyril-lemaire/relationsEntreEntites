<?php

namespace GenererLeCrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 */
class Reservation
{
	public function __toString()
	{
		return strval($this->getId());
	}
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var \GenererLeCrudBundle\Entity\Flight
     */
    private $flight;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nbSeats
     *
     * @param integer $nbSeats
     * @return Reservation
     */
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    /**
     * Get nbSeats
     *
     * @return integer 
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * Set flight
     *
     * @param \GenererLeCrudBundle\Entity\Flight $flight
     * @return Reservation
     */
    public function setFlight(\GenererLeCrudBundle\Entity\Flight $flight = null)
    {
        $this->flight = $flight;

        return $this;
    }

    /**
     * Get flight
     *
     * @return \GenererLeCrudBundle\Entity\Flight 
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * Add users
     *
     * @param \GenererLeCrudBundle\Entity\User $users
     * @return Reservation
     */
    public function addUser(\GenererLeCrudBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \GenererLeCrudBundle\Entity\User $users
     */
    public function removeUser(\GenererLeCrudBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
