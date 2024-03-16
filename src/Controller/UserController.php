<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController
{
    #[Route('/user/register')]
    public function userRegister()
    {
        return new Response(content: '<h1>Créez votre compte utilisateur</h1>');
    }

}