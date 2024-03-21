<?php


declare(strict_types=1);

namespace SamplePageBundle\Controller;

use Doctrine\ORM\EntityManagerInterface;
use PcmtFhirBundle\Entity\FhirMapping;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class SamplePageController extends AbstractController
{
   
    public function index(Request $request): JsonResponse
    {

        //add logic to check if mapping exists
        return new JsonResponse([
            'message': => "lemi was here"
        ]);
    }

}
