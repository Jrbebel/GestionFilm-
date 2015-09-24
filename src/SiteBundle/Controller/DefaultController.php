<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller {

    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction() {
               

        return array();
    }

    /**
     * @Route("/home",name="home")
     * @Template("FilmBundle:Default:dernierAjout.html.twig")
     */
    public function HomeAction() {
        
      
        return array();
    }

}
