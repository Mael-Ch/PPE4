<?php


namespace App\Controller;


use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin")
     */
    public function admin(): Response
    {

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',

        ]);
    }
}