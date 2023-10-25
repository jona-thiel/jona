<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Form\Type\TogglePasswordType;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class, [
                'required' => true,
            ])
            ->add('password', TogglePasswordType::class, [
//                'toggle' => true,
//                'visible_label' => '',
//                'hidden_label' => '',
//                'visible_icon' => '<i class="fa-regular fa-eye"></i>',
//                'hidden_icon' => '<i class="fa-regular fa-eye-slash"></i>',
//                'required' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
