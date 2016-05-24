<?php

namespace SEPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AssignmentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('courseid')
            ->add('assignmentid')
            ->add('assignmentname')
            ->add('assignmentdescription')
            ->add('testcaseinputs')
            ->add('testcaseoutputs')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SEPBundle\Entity\Assignment'
        ));
    }
}
