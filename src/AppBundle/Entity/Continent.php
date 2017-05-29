<?php
/**
 * Created by PhpStorm.
 * User: Ciryk
 * Date: 29/05/2017
 * Time: 23:41
 */

namespace AppBundle\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Continent
 * @package AppBundle\Entity
 */
class Continent
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("continentname")
     */
    private $name;

    /**
     * @JMS\Type("ArrayCollection<AppBundle\Entity\Country>")
     * @JMS\XmlList(inline = true, entry = "country")
     * @JMS\SerializedName("country")
     */
    private $countries;

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
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param mixed $countries
     */
    public function setCountries($countries)
    {
        $this->countries = $countries;
    }
}