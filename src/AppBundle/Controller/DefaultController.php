<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Continent;
use AppBundle\Entity\Country;
use AppBundle\Entity\Place;
use AppBundle\Entity\World;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $data = file_get_contents($this->get('kernel')->getRootDir().'/../web/test.xml');

        $serializer = $this->get('jms_serializer');
        /** @var World $world */
        $world = $serializer->deserialize($data, World::class, 'xml');

        foreach($world->getContinents() as $continent) {
            print "Continent name: " . $continent->getName() . "</br>";
            print "Countries: <ul>";
            /** @var Country $country */
            foreach($continent->getCountries() as $country) {
                print "<li>";
                print $country->getName();
                /** @var Place $place */
                print "<ul>";
                foreach($country->getPlaces() as $place) {
                    print "<li>";
                    print $place->getName();
                    print "<ul>";
                    foreach($place->getForecasts() as $forecast) {
                        print "<li>";
                        print $forecast;
                        print "</li>";
                    }
                    print "</ul>";
                    print "</li>";
                }
                print "</ul>";
                print "</li>";
            }
            print "</ul>";
        }



        die();

        return new Response($continent->name);

        die();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
