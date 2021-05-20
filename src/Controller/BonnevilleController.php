<?php
namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use App\Repository\PhotosRepository;
use App\Repository\SalleRepository;
use App\Repository\SiteRepository;
use App\Repository\ThemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonnevilleController extends AbstractController
{
    /**
     * @Route("/bonneville")
     */
    public function index(PhotosRepository  $photosRepository, ThemeRepository $themeRepository): Response
    {
        $toutesLesPhotosBonneville = $photosRepository->findBy(['site' => "12"]);
        $unePhotoRdm = array_rand($toutesLesPhotosBonneville, 1);
        $unePhotoRdm2 = array_rand($toutesLesPhotosBonneville, 1);
        $unePhotoRdm3 = array_rand($toutesLesPhotosBonneville, 1);
        $unePhotoRdm4 = array_rand($toutesLesPhotosBonneville, 1);
        $themeSalle = $themeRepository->findBy(['site' => '12']);


        return $this->render('page_bonneville/index.html.twig', [
            'controller_name' => 'BonnevilleController',
            'toutesPhotos' => $toutesLesPhotosBonneville,
            'unePhotoAleatoire' => $toutesLesPhotosBonneville[$unePhotoRdm],
            'unePhotoAleatoire2' => $toutesLesPhotosBonneville[$unePhotoRdm2],
            'unePhotoAleatoire3' => $toutesLesPhotosBonneville[$unePhotoRdm3],
            'unePhotoAleatoire4' => $toutesLesPhotosBonneville[$unePhotoRdm4],
            'themeSite' => $themeSalle,
        ]);
    }
}