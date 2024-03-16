<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/')]
    public function home()
        {
            return $this->render(view: 'default/home.html.twig');
        }
    
    #[Route('/category/{slug}')]
    public function category($slug)
    {
        return $this->render(view: 'default/category.html.twig',parameters: [
            'slug' => $slug
        ]);
        
    }

    #[Route('/page/presentation.html')]
    public function presentation()
    {
        return new Response(content: '<h1>Qui sommes-nous ?</h1>');
    }

    #[Route('/page/contact.html')]
    public function contact()
    {
        return new Response(content: '<h1>Contactez-nous</h1>');
    }
}