<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class AyTemaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('moduloRel', EntityType::class, array(
                    'class' => 'AppBundle:AyModulo',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('m')
                                ->orderBy('m.nombre', 'ASC');
                    },
                    'choice_label' => 'nombre',
                    'label'=>'Modulo'))
                ->add('funcionRel', EntityType::class, array(
                    'class' => 'AppBundle:AyFuncion',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('f')
                                ->orderBy('f.nombre', 'ASC');
                    },
                    'choice_label' => 'nombre',
                    'label'=>'Funcion'))
                ->add('grupoRel', EntityType::class, array(
                    'class' => 'AppBundle:AyGrupo',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('g')
                                ->orderBy('g.nombre', 'ASC');
                    },
                    'choice_label' => 'nombre',
                    'label'=>'Grupo'))
                ->add('nombre', TextType::class)
                ->add('orden', NumberType::class)
                ->add('descripcion', TextareaType::class)
                ->add('contenido',CKEditorType::class, array('required'=>'false'))
                ->add('guardar', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\AyTema'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_aytema';
    }


}
