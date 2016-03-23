<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreBundle:Default:index.html.twig');
    }
    
    public function shareAction()
    {
        return $this->render('CoreBundle:Default:share.html.twig');
    }
    
    public function inventoryAction()
    {
        return $this->render('CoreBundle:Default:inventory.html.twig');
    }
}
