<?php

namespace App\Controller;

use App\Entity\Projects;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class WorksController extends AbstractController
{
    #[Route('/works', name: 'works')]
    public function index(ManagerRegistry $doctrine): Response
    {	
    	$projects = $doctrine->getRepository(Projects::class)->findAll();

        return $this->render('works/works.html.twig', [
            'controller_name' => 'WorksController',
            'projects' => $projects
        ]);
    }
}
