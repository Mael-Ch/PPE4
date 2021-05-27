<?php
namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use App\Repository\PartieRepository;
use App\Repository\PhotosRepository;
use App\Repository\SalleRepository;
use App\Repository\SiteRepository;
use App\Repository\ThemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnecyController extends AbstractController
{
    /**
     * @Route("/annecy")
     */
    public function index(PhotosRepository  $photosRepository, ThemeRepository $themeRepository, PartieRepository $partieRepository): Response
    {
        $toutesLesPhotosAnnecySalle1 = $photosRepository->findBy(['site' => "6"]);
        $toutesLesPhotosAnnecySalle2 = $photosRepository->findBy(['site' => "5"]);
        $toutesLesPhotosAnnecySalle3 = $photosRepository->findBy(['site' => "4"]);
        $toutesLesPhotosAnnecySalle4 = $photosRepository->findBy(['site' => "3"]);
        $unePhotoRdm = array_rand($toutesLesPhotosAnnecySalle1, 1);
        $unePhotoRdm2 = array_rand($toutesLesPhotosAnnecySalle2, 1);
        $unePhotoRdm3 = array_rand($toutesLesPhotosAnnecySalle3, 1);
        $unePhotoRdm4 = array_rand($toutesLesPhotosAnnecySalle4, 1);
        $themeSalle1 = $themeRepository->findBy(['site' => '6']);
        $themeSalle2 = $themeRepository->findBy(['site' => '5']);
        $themeSalle3 = $themeRepository->findBy(['site' => '4']);
        $themeSalle4 = $themeRepository->findBy(['site' => '3']);
        $Partie = $partieRepository->findBy(['win' => '1'], ['temps' => 'ASC']);



        return $this->render('page_annecy/index.html.twig', [
            'controller_name' => 'AnnecyController',
            'toutesPhotosSalle1' => $toutesLesPhotosAnnecySalle1,
            'unePhotoAleatoire' => $toutesLesPhotosAnnecySalle1[$unePhotoRdm],
            'unePhotoAleatoire2' => $toutesLesPhotosAnnecySalle2[$unePhotoRdm2],
            'unePhotoAleatoire3' => $toutesLesPhotosAnnecySalle3[$unePhotoRdm3],
            'unePhotoAleatoire4' => $toutesLesPhotosAnnecySalle4[$unePhotoRdm4],
            'themeSite1' => $themeSalle1,
            'themeSite2' => $themeSalle2,
            'themeSite3' => $themeSalle3,
            'themeSite4' => $themeSalle4,
            'UnePartie' => $Partie[0],
        ]);
    }
}