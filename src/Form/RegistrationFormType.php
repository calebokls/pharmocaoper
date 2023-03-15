<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Blank;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastname',TextType::class,[
                'label'=>'Votre nom',
                'constraints'=>[
                    new NotBlank([
                        'message'=>'Veuillez renseigner votre nom'
                    ])
                ]
            ])
            ->add('firstname',TextType::class,[
                'label'=>'Votre Prénoms',
                'constraints'=>[
                    new NotBlank([
                        'message'=>'Veuillez renseigner votre prenoms'
                    ]),
                    new Length([
                        'min'=>2,
                        'minMessage'=>'Votre prenom est trop court',
                        'max'=>400
                    ])
                ]
            ])
            ->add('email',EmailType::class,[
                'label'=>'Entrez votre adresse mail'
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword',RepeatedType::class,[
                'type'=>PasswordType::class,
                'first_options'=>[
                    'attr'=>['autocomplete'=>'new-password'],
                    'constraints'=>[
                        new NotBlank([
                            'message'=>'Veuillez entres votre mot de passe'
                        ]),
                        new Length([
                               'min'=>6,
                               'minMessage'=>'Votre mot de passe doit etre de {{limit}} charateres',
                               'max'=>4096,
                               'maxMessage'=>'Votre mot de passe est trop long'
                        ]),
                       
                    ],
                    'label'=>'Mot de Passe'
                    ],
                    'second_options'=>[
                        'attr'=>['autocomplte'=>'new-password'],
                        'label'=>'Confirmer votre mot de passe'
                    ],
                    'invalid_message'=>'Les deux mot de passe ne sont pas identique',
                    'mapped'=>false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
