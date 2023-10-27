<?php

namespace App\Form\Factory;

use App\Form\LoginType;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginFormFactory
{
    public function __construct(private FormFactoryInterface $formFactory,
                                private AuthenticationUtils $authenticationUtils
    ) {}

    public function createForm(): FormInterface
    {
        $form = $this->formFactory->create(LoginType::class);
        $form->get('_username')->setData($this->authenticationUtils->getLastUsername());

        if ($error = $this->authenticationUtils->getLastAuthenticationError()) {
            $form->addError(new FormError($error->getMessageKey()));
        }

        return $form;
    }
}
