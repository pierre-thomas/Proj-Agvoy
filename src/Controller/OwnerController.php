<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OwnerController extends AbstractController
{
    //test
    /**
     * @Route("/owner", name="owner")
     */
    public function index()
    {
        return $this->render('baselayout.html.twig', [
            'controller_name' => 'OwnerController',
        ]);
    }
}
