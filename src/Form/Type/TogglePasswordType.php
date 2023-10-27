<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TogglePasswordType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'toggle' => true,
            'visible_label' => '',
            'hidden_label' => '',
            'visible_icon' => '<i class="fa-regular fa-eye"></i>',
            'hidden_icon' => '<i class="fa-regular fa-eye-slash"></i>',
            'attr' => [
                'class' => 'pe-5',
            ],
            'required' => true,
        ]);
    }

    public function getParent()
    {
        return PasswordType::class;
    }
}
