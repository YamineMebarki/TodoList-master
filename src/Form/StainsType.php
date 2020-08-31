<?php

namespace App\Form;

use App\Entity\Stains;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class StainsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('task', TextType::class, [
        'label' => 'Libellé'
        ,'required'=>true
        ,'attr' => ['minLength' => '1','maxLength' => '150',"autoComplete"=>"abc"]
        ,'constraints' => [
            new NotBlank([
                'message' => "Saisir le libellé  ",
            ]),
            new Length([
                'min' => 1,
                'minMessage' => 'Nombre de caratère incorrect',
                'max' => 100,
            ])
        ]
    ])
          /*  ->add('state')
            ->add('project')
            ->add('createdAt')*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Stains::class,
        ]);
    }
}
