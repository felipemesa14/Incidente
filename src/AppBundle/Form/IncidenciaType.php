<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class IncidenciaType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('prioridadRel', EntityType::class, array(
                    'class' => 'AppBundle:Prioridad',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('p')
                                ->orderBy('p.nombre', 'ASC');
                    },
                    'choice_label' => 'nombre',
                    'required' => true))
                ->add('categoriaRel', EntityType::class, array(
                    'class' => 'AppBundle:Categoria',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                                ->orderBy('c.nombre', 'ASC');
                    },
                    'choice_label' => 'nombre',
                    'required' => true))
                ->add('areaRel', EntityType::class, array(
                    'class' => 'AppBundle:Area',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('a')
                                ->orderBy('a.nombre', 'ASC');
                    },
                    'choice_label' => 'nombre',
                    'required' => true))
                ->add('cargoRel', EntityType::class, array(
                    'class' => 'AppBundle:Cargo',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                                ->orderBy('c.nombre', 'ASC');
                    },
                    'choice_label' => 'nombre',
                    'required' => true))
                ->add('nombreCompleto', TextType::class)
                ->add('telefono', TextType::class)
                ->add('extension', TextType::class)
                ->add('email', EmailType::class, array('required' => false))
                ->add('titulo', TextType::class)
                ->add('descripcion', TextareaType::class)
                ->add('image', FileType::class, array('required' => false))
                ->add('guardar', SubmitType::class, array(
                    'label' => 'Guardar'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Incidencia'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_incidencia';
    }

}
