<?php
/**
 * Created by PhpStorm.
 * User: Ciryk
 * Date: 30/05/2017
 * Time: 0:26
 */

namespace AppBundle\Entity;

use JMS\Serializer\Annotation as JMS;

class Place
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("placename")
     */
    private $name;

    /**
     * @JMS\Type("ArrayCollection<AppBundle\Entity\Forecast>")
     * @JMS\XmlList(inline = true, entry = "forecast")
     * @JMS\SerializedName("forecast")
     */
    private $forecasts;

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
    public function getForecasts()
    {
        return $this->forecasts;
    }

    /**
     * @param mixed $forecasts
     */
    public function setForecasts($forecasts)
    {
        $this->forecasts = $forecasts;
    }
}