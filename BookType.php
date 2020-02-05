<?php

namespace Lib\LibraryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', 'text', array('required'=>'false'))
            ->add('subCode', 'text', array('required'=>'false'))
            ->add('title', 'text', array('required'=>'false'))
            ->add('subTitle', 'text', array('required'=>'false'))
            ->add('author', 'text', array('required'=>'false'))
            ->add('editor', 'text', array('required'=>'false'))
            ->add('edition', 'text', array('required'=>'false'))
            ->add('lastCode', 'text', array('required'=>'false'))
            ->add('newCode', 'text', array('required'=>'false'))
            ->add('description', 'textarea', array('required'=>'false'))
            ->add('ISBN', 'text', array('required'=>'false'))
            ->add('EAN', 'text', array('required'=>'false'))
            ->add('format', 'text', array('required'=>'false'))
            ->add('volume', 'text', array('required'=>'false'))
            ->add('numberOfCD', 'text', array('required'=>'false'))
            ->add('numberOfPage', 'text', array('required'=>'false'))
            ->add('dateOfEdition', 'date', array('format'=>'yyyy-MM-dd'))
            ->add('dateOfAcquisition', 'date', array('format'=>'yyyy-MM-dd'))
            ->add('language', 'text', array('required'=>'false'))
            ->add('numberOfCopy', 'text', array('required'=>'false'))
            ->add('coverPage', 'text', array('required'=>'false'))
            ->add('state', 'text', array('required'=>'false'))    
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lib\LibraryBundle\Entity\Book'
        ));
    }

    public function getName()
    {
        return 'lib_librarybundle_booktype';
    }
}
