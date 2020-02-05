<?php
/* School controller*/
namespace Lib\LibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Lib\LibraryBundle\Business\fieldOfStudy\FieldOfStudyServiceImpl;
use Lib\LibraryBundle\Entity\FieldOfStudy;
use Lib\LibraryBundle\Form\FieldOfStudyType;

class FieldOfStudyController extends Controller{
    
    public function createAction(){
        $fieldOfStudy = new FieldOfStudy();
        $form = $this->createForm(new FieldOfStudyType, $fieldOfStudy,array('csrf_protection' => false));
        $request = $this->getRequest();
        if( $request->getMethod() == 'POST' ){
            $form->bind($request);
            if($form->isValid()){
                $em =  $this->getDoctrine()->getManager();
                $fieldOfStudyService = new FieldOfStudyServiceImpl($em);
                $fieldOfStudyService->createFieldOfStudy($fieldOfStudy);
                
                return $this->redirect($this->generateUrl('tableFieldOfStudy'));
            }
        }
        return $this->render('LibraryBundle:register:fieldOfStudy.html.twig', array('form' => $form->createView()));
        
    }
     public function deleteAction()
    {
          $request = $this->container->get('request');
         $id = $request->request->get('id');
         
        $entityManager = $this->getDoctrine()->getManager();
        $fieldOfStudy = new FieldOfStudyServiceImpl($entityManager);
        $delete= $fieldOfStudy->deleteFieldOfStudy($id);
        
        return new \Symfony\Component\HttpFoundation\JsonResponse($delete);
    }
    
    public function listAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $fieldOfStudy = new FieldOfStudyServiceImpl($entityManager);
        $list= $fieldOfStudy->listOfFieldOfStudy();
        
        
        return new \Symfony\Component\HttpFoundation\JsonResponse($list);
    }
    public function listBySchoolAction()
    {
        $request = $this->container->get('request');
         $id = $request->request->get('id');
         
        $entityManager = $this->getDoctrine()->getManager();
        $fieldOfStudy = new FieldOfStudyServiceImpl($entityManager);
        $list= $fieldOfStudy->listFieldOfBySchool($id);
        
        
        return new \Symfony\Component\HttpFoundation\JsonResponse($list);
    }
   
    
    public function updateAction( $id){
         
        $entityManager =  $this->getDoctrine()->getManager();
        $fieldOfStudy = $entityManager->getRepository('LibraryBundle:FieldOfStudy')->find($id);
        
        $form = $this->createForm(new FieldOfStudyType, $fieldOfStudy,array('csrf_protection' => false));
        $request = $this->getRequest();
        
        if( $request->getMethod() == 'POST' ){
            $form->bind($request);
            
            if($form->isValid()){     
                $fieldOfStudyService = new FieldOfStudyServiceImpl($entityManager);
                $fieldOfStudyService->updateFieldOfStudy($fieldOfStudy);
                
                return $this->redirect($this->generateUrl('tableFieldOfStudy'));
            }
        }
        return $this->render('LibraryBundle:update:fieldOfStudy.html.twig', array('form' => $form->createView()));
        
    }
    
    public function readAction(){
        
        $request = $this->container->get('request');
         $id = $request->request->get('id');
         
        $entityManager = $this->getDoctrine()->getManager();
        $fieldOfStudy = new FieldOfStudyServiceImpl($entityManager);
        $read = $fieldOfStudy->readFieldOfStudy($id);
        
        return new \Symfony\Component\HttpFoundation\JsonResponse($read);

    }

    public function tableAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $fieldOfStudy = new FieldOfStudyServiceImpl($entityManager);
        $listFieldOfStudy = $fieldOfStudy->listOfFieldOfStudy();
        
        return $this->render("LibraryBundle:Edit:listFieldOfStudy.html.twig", array("listFieldOfStudy" => $listFieldOfStudy) );
    
    }
    
}