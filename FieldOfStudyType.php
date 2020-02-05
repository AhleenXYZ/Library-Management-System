<?php

namespace Lib\LibraryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FieldOfStudyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('school','entity',array('class'=>  'LibraryBundle:School','property'=>'name' , 'required'=>'true'))
            ->add('name','text')
            ->add('description', 'text')
            
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lib\LibraryBundle\Entity\FieldOfStudy'
        ));
    }

    public function getName()
    {
        return 'lib_librarybundle_fieldofstudytype';
    }
}
