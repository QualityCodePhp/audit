<?php

namespace App\Form;

use App\Entity\News;
use App\Entity\NewsPriority;
use App\Entity\NewsVisibility;
use App\Entity\Referentiel;
use App\Form\DataTransformer\DateToStringTransformer;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('refIdType', EntityType::class, [
                'class' => Referentiel::class,
                'label' => "Type de news",
                'placeholder' => 'Choisir une valeur',
                'query_builder' => function (EntityRepository $er) {
                        return $er->findByReferentielQB('NEWS_TYPE');
                },
            ])
            ->add('refIdPriorite', EntityType::class, [
                'class' => Referentiel::class,
                'label' => "Priorité",
                'placeholder' => 'Choisir une valeur',
                'query_builder' => function (EntityRepository $er) {
                    return $er->findByReferentielQB('NEWS_PRIORITE');
                },
            ])
            ->add('refIdVisibilite', EntityType::class, [
                'class' => Referentiel::class,
                'label' => "Visibilité",
                'placeholder' => 'Choisir une valeur',
                'query_builder' => function (EntityRepository $er) {
                    return $er->findByReferentielQB('NEWS_VISIBILITE');
                },
            ])
            ->add('newsTitre', TextType::class, ['label' => "Titre"])
            ->add('newsContenu', TextareaType::class, ['label' => "Contenu", 'attr' => ['id' => 'summernote']])
            ->add('newsDateDebValid',TextType::class,  [
                'label' => "Date debut de diffusion",
                'attr' => ['class' => 'js-datepicker'],
                ])
            ->add('newsDateFinValid',TextType::class,  [
                'label' => "Date fin de diffusion",
                'attr' => ['class' => 'js-datepicker']
                ])
            ->add('newsPieceJointe1', FileType::class, [
                'label' => 'Piece jointe N°1',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                    ])
                ],
            ])
            ->add('newsPieceJointe2', FileType::class, [
                'label' => 'Piece jointe N°2',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                    ])
                ],
            ])
        ;
        $builder->get('newsDateDebValid')->addModelTransformer(new DateToStringTransformer());
        $builder->get('newsDateFinValid')->addModelTransformer(new DateToStringTransformer());
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => News::class,
        ]);
    }
}
