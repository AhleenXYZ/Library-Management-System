<?php

/** Book Controller
 */

namespace Lib\LibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

use Lib\LibraryBundle\Business\book\BookServiceImpl;
use Lib\LibraryBundle\Entity\Book;
use Lib\LibraryBundle\Form\BookType;
use Lib\LibraryBundle\Entity\Document;

class BookController extends Controller{
    
   
    
     public function uploadAction(){
        $document = new Book();
        $form = $this->createFormBuilder($document,array('csrf_protection' => false))
            //->add('name') /*Please dont wipe out*/
            ->add('file')
            ->getForm() ;
        $path="testing!!!!!"; 
        var_dump($path);
       // echo 'the result is!!!!';
        if ($this->getRequest()->isMethod('POST')) {
           $form->bind($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                 $document->setPath($document->upload()) ;
               $path="testing!!!!!"; //$document->getPath();
                $em->persist($document);
                $em->flush();
                var_dump($path);
                
                return $this->redirect($this->generateUrl('homePage'));
            }
        }
        return $this->render('LibraryBundle::formulaire.html.twig', array('form' => $form->createView()));    
    }
    
    public function updateAction($id){
        $em =  $this->getDoctrine()->getManager();
        $book = $em->getRepository('LibraryBundle:Book')->find($id);
        $form = $this->createForm(new BookType, $book);
        $request = $this->getRequest();
        if( $request->getMethod() == 'POST' ){
            $form->bind($request);
            if($form->isValid()){
                $bookService = new BookServiceImpl($em);
                $bookService->updateBook($book);
                return $this->redirect($this->generateUrl('tableBook'));
            }
        }
        return $this->render('LibraryBundle:update:updateBook.html.twig', array('form' => $form->createView()));
    }
    
    public function deleteAction($id){
        $em =  $this->getDoctrine()->getManager();
        $bookService = new BookServiceImpl($em);
        $bookService->deleteBook($id);
        return $this->redirect($this->generateUrl('homePage'));
    }
    
    public function listAction(){
        $em =  $this->getDoctrine()->getManager();
        $bookService = new BookServiceImpl($em);
        $list = $bookService->listBook();
        return $this->render('LibraryBundle:Default:index.html.twig', array('name' => var_dump($list)));
    }
    
    public function readAction($id){
        $em =  $this->getDoctrine()->getManager();
        $bookService = new BookServiceImpl($em);
        $book = $bookService->readBook($id);
        return $this->render('LibraryBundle:Default:index.html.twig', array('name' => var_dump($book)));
    }
    public function recentlyAddedAction($Userid)
    {
          $em =  $this->getDoctrine()->getManager();
        $bookService = new BookServiceImpl($em);
        $book = $bookService->listRecentlyAdded($Userid);
        return $this->render('LibraryBundle:Default:index.html.twig', array('name' => var_dump($book)));
    
        
    }
}