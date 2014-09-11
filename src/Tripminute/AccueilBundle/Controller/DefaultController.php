<?php

namespace Tripminute\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TripminuteAccueilBundle:Default:index.html.twig');
    }
}
