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
                    'choice_label' => 'nombre'))
                ->add('grupoRel', EntityType::class, array(
                    'class' => 'AppBundle:Grupo',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('g')
                                ->orderBy('g.nombre', 'ASC');
                    },
                    'choice_label' => 'nombre'))
                ->add('categoriaRel', EntityType::class, array(
                    'class' => 'AppBundle:Categoria',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                                ->orderBy('c.nombre', 'ASC');
                    },
                    'choice_label' => 'nombre'))
                ->add('titulo', TextType::class)
                ->add('descripcion', TextareaType::class)
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
