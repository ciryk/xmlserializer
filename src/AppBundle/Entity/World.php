<?php
/**
 * Created by PhpStorm.
 * User: Ciryk
 * Date: 30/05/2017
 * Time: 0:44
 */

namespace AppBundle\Entity;

use JMS\Serializer\Annotation as JMS;

class World
{
    /**
     * @JMS\Type("ArrayCollection<AppBundle\Entity\Continent>")
     * @JMS\XmlList(inline = true, entry = "continent")
     * @JMS\SerializedName("continent")
     */
    private $continents;

    /**
     * @return mixed
     */
    public function getContinents()
    {
        return $this->continents;
    }

    /**
     * @param mixed $continents
     */
    public function setContinents($continents)
    {
        $this->continents = $continents;
    }
}