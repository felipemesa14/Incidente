<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;

class IncidenciaAdminType extends AbstractType {

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
                ->add('categoriaRel', EntityType::class, array(
                    'class' => 'AppBundle:Categoria',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                                ->orderBy('c.nombre', 'ASC');
                    },
                    'choice_label' => 'nombre'))
                ->add('temaRel', EntityType::class, array(
                    'placeholder'=>'',
                    'class' => 'AppBundle:AyTema',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('at')
                                ->orderBy('at.codigoTemaPk', 'ASC');
                    },
                    'choice_label' => function ($tema) {
                        return $tema->getModuloRel()->getNombre() . ' - '.$tema->getFuncionRel()->getNombre().' - '. $tema->getNombre();
                    },'required'=>false))
                ->add('estadoSolucionado', ChoiceType::class, array(
                    'choices' => array(
                        'No' => '0',
                        'Si' => '1',)))
                ->add('usuarioAsignado', ChoiceType::class, array(
                    'choices' => array(
                        'Juan Felipe Tangarife' => 'Felipe',
                        'Juan Felipe Mesa Ocampo' => 'Juan',
                        'Sebastian Orozco' => 'Sebastian',
                        'Mario Estrada' => 'Mario',)))
                ->add('estadoAtendido', ChoiceType::class, array(
                    'choices' => array(
                        'No' => '0',
                        'Si' => '1',)))
                ->add('solucion', TextareaType::class, array('required' => false))
                ->add('titulo', TextType::class)
                ->add('descripcion', TextareaType::class)
                ->add('descripcionDesarrollo', TextareaType::class)
                ->add('guardar', SubmitType::class, array('label' => 'Guardar'))
                ->add('guardarTarea', SubmitType::class, array('label' => 'Enlazar a tareas'));
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
