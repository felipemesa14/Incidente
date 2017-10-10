<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class LlamadaType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder->add('clienteRel', EntityType::class, array(
                'class' => 'AppBundle:Cliente',
                'query_builder' => function (EntityRepository $er)  {
                    return $er->createQueryBuilder('a')
                    ->orderBy('a.nombre', 'ASC');},
                'choice_label' => 'nombre',
                'required' => true))
                ->add('contacto', TextType::class, array('required'=> True))
                ->add('fecha', DateType::class, array('required'=> True))
                ->add('hora', TimeType::class, array('required'=> True))
                ->add('descripcion', TextareaType::class, array('required'=> True,'attr'=>array('rows'=> 4)))
                ->add('guardar', SubmitType::class)
                ->add('eliminar', SubmitType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Llamada'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_llamada';
    }

}
