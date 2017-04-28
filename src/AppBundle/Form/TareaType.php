<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class TareaType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('usuarioAsignadoRel', EntityType::class, array(
                    'class' => 'AppBundle:User',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->where('u.codigoClienteFk = 1')
                                ->orderBy('u.username', 'ASC');
                    },
                    'choice_label' => 'username',
                    'required' => true))
                ->add('prioridadRel', EntityType::class, array(
                    'class' => 'AppBundle:Prioridad',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('p')
                                ->orderBy('p.nombre', 'ASC');
                    },
                    'preferred_choices' => array('3'),
                    'choice_label' => 'nombre',
                    'required' => true
                ))
                ->add('tipoTareaRel', EntityType::class, array(
                    'class' => 'AppBundle:TipoTarea',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('tp')
                                ->orderBy('tp.nombre', 'ASC');
                    },
                    'choice_label' => 'nombre',
                    'required' => true))
                ->add('fechaInicio', DateType::class, array('data' => new \DateTime("now"), 'widget' => 'single_text', 'format' => 'yyyy-MM-dd', 'attr' => array('class' => 'date',)))
                ->add('fechaFinal', DateType::class, array('data' => new \DateTime("now"), 'widget' => 'single_text', 'format' => 'yyyy-MM-dd', 'attr' => array('class' => 'date',)))
                ->add('porcentaje')
                ->add('descripcion', TextareaType::class)
                ->add('guardar', SubmitType::class, array(
                    'label' => 'Guardar'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Tarea'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_tarea';
    }

}
