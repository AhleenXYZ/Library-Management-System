<?php

namespace Lib\LibraryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matricule', 'text',array('required'=>'true'))
            ->add('user','entity',array('class'=>  'LibUserBundle:User','property'=>'username' /*,
                'query_builder'=> function (EntityRepository $ur)use ($options){
                    return $ur->getUnassignedUser($ur);                          
                 
                }
                */, 'required'=>'true'))
           // ->add('fieldOfStudy', 'entity',['class'=>  'LibraryBundle:FieldOfStudy','property'=>'title','required'=>'true'])
            ->add('fieldOfStudy', 'entity',array('class'=>  'LibraryBundle:FieldOfStudy','property'=>'name',
                'query_builder'=> function (EntityRepository $er)use ($options){
                return $er->createQueryBuilder('f')->where('f.school= :id')
                          ->setParameter('id',1);
                }))
                
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lib\LibraryBundle\Entity\Student'
        ));
    }

    public function getName()
    {
        return 'lib_librarybundle_studenttype';
    }
}
