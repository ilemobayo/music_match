<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Description of RegisterType
 *
 * @author Hello
 */
class RegisterType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'username',
            TextType::class,
            [
                'required' => false,
                'attr' => 
                    [
                        'placeholder' => 'Pseudo'
                    ],
                'constraints' =>
                    [
                        new Assert\NotBlank(['message' => 'Le champ doit être rempli']),
                        new Assert\Length(['min' => 3, 'max' => 12, 'minMessage' => 'Le pseudo doit faire 3 caractères min', 'maxMessage' => 'le pseudo doit faire moins de 12 caractères'])
                    ]
            ]
          );

        $builder->add('password', PasswordType::class,
            [
                'required' => false,
                'attr' => 
                    [
                        'placeholder' => 'Mot de passe'
                    ],
                'constraints' =>
                [
                    new Assert\NotBlank(['message' => 'Mot de passe requis']),
                    new Assert\Length(['min' => 6, 'minMessage' => 'le mot de passe doit faire 6 caractères min', 'max' => 12, 'maxMessage' => 'le mot de passe doit faire moins de 12 caractères'])
                ]
            ]
        );

        $builder->add('email', EmailType::class,
            [
                'required' => false,
                'attr' => 
                    [
                        'placeholder' => 'Email'
                    ],
                'constraints' =>
                    [
                        new Assert\Email(['message' => 'Email non valide']),
                        new Assert\NotBlank(['message' => 'Doit être rempli'])
                    ]
            ]
        );
        
        $builder->add('submit', SubmitType::class,[
                'label' => 'S\'inscrire' 
            ]
        );
    }

}
