<?php
/**
 * Created by PhpStorm.
 * User: Ciryk
 * Date: 30/05/2017
 * Time: 0:30
 */

namespace AppBundle\Entity;

use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints\DateTime;

class Forecast
{
    /**
     * @JMS\Type("DateTime<'Y/m/d'>")
     * @JMS\SerializedName("date")
     */
    private $date;
    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("temperature")
     */
    private $temperature;
    /**
     * @JMS\Type("double")
     * @JMS\SerializedName("wind")
     */
    private $wind;

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param mixed $temperature
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    /**
     * @return mixed
     */
    public function getWind()
    {
        return $this->wind;
    }

    /**
     * @param mixed $wind
     */
    public function setWind($wind)
    {
        $this->wind = $wind;
    }

    function __toString()
    {
        return "Weather | temp: " . $this->getTemperature() . " - wind: " . $this->getWind() . " @" . ($this->getDate())->format('Y-m-d');
    }


}