<?php

declare(strict_types=1);

namespace App\Controller;


class AuthenticationController extends AbstractController
{
    public function enterAction(): void
    {
        $this->render('authentication/enter');
    }

    public function logoutAction(): void
    {
        $this->render('authentication/logout');
    }

    public function registerAction(): void
    {
        $this->render('authentication/register');
    }
}