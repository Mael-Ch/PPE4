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

class ThononController extends AbstractController
{
    /**
     * @Route("/thonon")
     */
    public function index(PhotosRepository  $photosRepository, ThemeRepository $themeRepository): Response
    {
        $toutesLesPhotosThonons1 = $photosRepository->findBy(['site' => "2"]);
        $toutesLesPhotosThonons2 = $photosRepository->findBy(['site' => "1"]);
        $unePhotoRdm = array_rand($toutesLesPhotosThonons1, 1);
        $unePhotoRdm2 = array_rand($toutesLesPhotosThonons1, 1);
        $unePhotoRdm3 = array_rand($toutesLesPhotosThonons2, 1);
        $unePhotoRdm4 = array_rand($toutesLesPhotosThonons2, 1);
        $themeSalle1 = $themeRepository->findBy(['site' => '1']);
        $themeSalle2 = $themeRepository->findBy(['site' => '2']);



        return $this->render('page_thonon/index.html.twig', [
            'controller_name' => 'ThononController',
            'toutesPhotos1' => $toutesLesPhotosThonons1,
            'toutesPhotos2' => $toutesLesPhotosThonons2,
            'unePhotoAleatoire' => $toutesLesPhotosThonons1[$unePhotoRdm],
            'unePhotoAleatoire2' => $toutesLesPhotosThonons1[$unePhotoRdm2],
            'unePhotoAleatoire3' => $toutesLesPhotosThonons2[$unePhotoRdm3],
            'unePhotoAleatoire4' => $toutesLesPhotosThonons2[$unePhotoRdm4],
            'themeSite1' => $themeSalle1,
            'themeSite2' => $themeSalle2,
        ]);
    }
}