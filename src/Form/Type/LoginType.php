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
 * Description of LoginType
 *
 * @author Hello
 */
class LoginType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', EmailType::class,
            [
                'required' => false,
                'label' => 'Adresse mail',
                'constraints' => [
                    new Assert\Email(['message' => 'Email non valide']),
                    new Assert\NotBlank(['message' => 'Doit être rempli'])
                ]
            ]
        );
        $builder->add('password', PasswordType::class,
            [
                'required' => false,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le mot de passe doit être fourni'])]
            ]
        );
        
        $builder->add('submit', SubmitType::class,[
                'label' => 'Se Connecter' 
            ]
        );
    }
}
