<?php

namespace Bazaar\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BazaarStoreBundle:Default:index.html.twig');
    }
}
