<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Form\DemandeFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemandeController extends AbstractController
{
    /**
     * @Route("/demande", name="demande")
     */
    public function index(Request $request): Response
    {
        $demande=new Demande();
        $form= $this->createForm(DemandeFormType::class, $demande);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){


        }
        return $this->render('demande/elements.html.twig', [
            'controller_name' => 'DemandeController',
            'form'=>$form->createView()
        ]);
    }
}
