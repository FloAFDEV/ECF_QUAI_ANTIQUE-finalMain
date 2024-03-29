<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
// use Symfony\Component\Validator\Constraints\Length;
// use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Regex;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class)
            ->add('userName', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('RGPDConsent', CheckboxType::class, [
                'attr' => ['class' => 'form-check-input'],
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter nos conditions.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [

                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'nouveau mot de passe',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    // new NotBlank([
                    //     'message' => 'Merci d\'entrer un mot de passe',
                    // ]),
                    // new Length([
                    //     'min' => 6,
                    //     'max' => 30,
                    //     'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères',
                    //     // max length allowed by Symfony for security reasons
                    // ]),

                    new Regex([
                        'pattern' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/',
                        'message' => 'Le mot de passe doit comporter au moins 8 caractères avec au moins 1 majuscule, 1 minuscule, 1 chiffre.',
                    ]),
                ],
            ]);
    }
    // /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{6,}$/
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
