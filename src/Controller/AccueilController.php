<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use App\Repository\ClientRepository;
use App\Repository\PartieRepository;
use App\Repository\PhotosRepository;
use App\Repository\SalleRepository;
use App\Repository\SiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
    * @Route("/")
    */
    public function index(ClientRepository $clientRepository, PartieRepository $partieRepository, SiteRepository $siteRepository, PhotosRepository  $photosRepository): Response
    {
        $allClient = $clientRepository->findAll();
        $unClient = array_rand($allClient,1);
        $allPartie = $partieRepository->findAll();
        $partieWin = $partieRepository->findBy(['win' => "1"]);
        $allSite = $siteRepository->findAll();
        $allPhotos = $photosRepository->findAll();
        $sallePhotos = $photosRepository->findBy(['site' => "6"]);
        $sallePhotosRdm = array_rand($sallePhotos, 2);
        $unePhoto = array_rand($allPhotos, 1);



        $toutesLesPhotos = $photosRepository->findBy(['site' => "6"]);
        $unePhotoRdm = array_rand($toutesLesPhotos, 1);
        $unePhotoRdm2 = array_rand($toutesLesPhotos, 1);


        return $this->render('page_accueil/index.html.twig', [
            'controller_name' => 'HomeController',
            'randomclient' => $allClient[$unClient],
            'client' => $allClient,
            'partie' => $allPartie,
            'salle' => $allSite,
            'photos' =>$allPhotos,
            'randomphoto' => $allPhotos[$unePhoto],
            'photoSalle1' => $sallePhotos,
            'rdmPhoto' => $sallePhotosRdm,
            'toutesPhotos' => $toutesLesPhotos,
            'unePhotoAleatoire' => $toutesLesPhotos[$unePhotoRdm],
            'unePhotoAleatoire2' => $toutesLesPhotos[$unePhotoRdm2],
            'partieWin'=> $partieWin

        ]);
    }
}