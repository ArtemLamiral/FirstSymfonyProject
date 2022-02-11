<?php

namespace App\Controller;

use App\Entity\Projects;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class IndexController extends AbstractController
{	
    /**
     * @Route("/", name="index")
     */
    
    public function index(ManagerRegistry $doctrine): Response
    {
    	$projects = $doctrine->getRepository(Projects::class)->findAll();

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'projects' => $projects
        ]);
    }
}
