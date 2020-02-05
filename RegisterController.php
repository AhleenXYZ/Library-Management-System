<?php

namespace Lib\LibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class RegisterController extends Controller
{
     /**
     * @Route("/testView")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('LibraryBundle:register:formulaire.html.twig');
    }
}
