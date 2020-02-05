<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Lib\LibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

//use Lib\LibraryBundle\Business\status\StatusServiceImpl;
use Lib\LibraryBundle\Form\PartnerType;
use Lib\LibraryBundle\Form\FieldOfStudyType;
use Lib\LibraryBundle\Form\StudentType;
use Lib\LibraryBundle\Form\AddressType;
use Lib\UserBundle\Form\UserType;
use Lib\LibraryBundle\Entity\Address;
use Lib\UserBundle\Entity\User;
use Lib\UserBundle\Entity\UserRepository;
use Lib\LibraryBundle\Entity\Partner;
use Lib\LibraryBundle\Entity\Student;
use Lib\LibraryBundle\Entity\FieldOfStudy;

use Lib\LibraryBundle\Business\partner\PartnerServiceImpl;
use Lib\LibraryBundle\Business\status\StatusServiceImpl;
use Lib\LibraryBundle\Business\address\AddressServiceImpl;
use Lib\UserBundle\Business\User\UserServiceImpl;
 

class TestController extends Controller 
{
    /**
     * @Route("/test")
     * @Template()
     */
    public function testAction()
    {
        $em=  $this->getDoctrine()->getManager();
        
       
      /*  $name=" test good user 3";
        $email="Donvex 3";
        $password="LibUsers";
        $superAdmin="false";
        $active="true";
        
        $um= new UserServiceImpl($em);
        $um->createUser($name, $password, $email, boolval($active), $superAdmin);*/
        $u=new UserRepository($em);
        $ur= $u->except();
        
        
        
        //$result=$test->readStatus(3);
       /* $result=$test->deleteStatus(1);
               $description="donvex ";
               $title="Master 5";
               $lastName="jsdsd";
               $firstName="JOjex ";
               $phone="99235718;567898098";
               $location="Sresearch cen";
               $country="Cameroon bis";
               $town="yaounde";
               $email="memberpkf04@gmail.com";
               
              /* $status_service=new StatusServiceImpl($e $request = $this->container->get('request');
         $id = $request->request->get('id');
         
        $entityManager = $this->getDoctrine()->getManager();
        $relationshipManager = new RelationshipServiceImpl($entityManager);
        $relationship = $relationshipManager->readRelationship($id);m);                
               $status_id=$status_service->createStatus($title, $description)->getId(); 
               
               $test=new PartnerServiceImpl($em);
               $partner=$test->createPartner($firstName, $lastName,$status_id);

               $address_service=new AddressServiceImpl($em);
               $address_service->createAddress($phone, $location, $country, $town, $email, $partner, null, null);*/
        
        return $this->render("LibraryBundle:Default:index.html.twig",array("name"=>  var_dump($ur)));
    }
    /**
     * @Route("/testForm")
     * @Template()
     */
    public function formAction()
    {
        $student= new Student();
        $form=$this->createForm(new StudentType(), $student);
        
        
        $request=$this->get('request');
        
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em=  $this->getDoctrine()->getManager();
                $em->persist($student);
                $em->flush();
                
               return $this->render('LibraryBundle::layout.html.twig');
            }
        }
        return $this->render('LibraryBundle:register:formulaireT.html.twig');
    }
}


