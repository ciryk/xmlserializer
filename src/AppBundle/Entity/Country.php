<?php
/**
 * Created by PhpStorm.
 * User: Ciryk
 * Date: 29/05/2017
 * Time: 23:54
 */

namespace AppBundle\Entity;

use JMS\Serializer\Annotation as JMS;

class Country
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("countryname")
     */
    private $name;

    /**
     * @JMS\Type("ArrayCollection<AppBundle\Entity\Place>")
     * @JMS\XmlList(inline = true, entry = "place")
     * @JMS\SerializedName("place")
     */
    private $places;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * @param mixed $places
     */
    public function setPlaces($places)
    {
        $this->places = $places;
    }
}