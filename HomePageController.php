<?php

/** 
 * Controller of the home page
 */

namespace Lib\LibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class HomePageController extends Controller{
    
    
    public function indexAction() {
        $user = $this->getUser()->getRoles();
        //echo var_dump($user);
        if($user[0]=="ROLE_ADMIN"){
            return $this->render("LibraryBundle:Default:adminDashbord.html.twig",array("name"=>"")); 
        }
        elseif ($user[0]=="ROLE_PARTNER") {
            return $this->render("LibraryBundle:Default:partnerDashbord.html.twig",array("name"=>"")); 
        }  
        return $this->render("LibraryBundle:Default:userdashbord.html.twig",array("name"=>"")); 
    }
}

