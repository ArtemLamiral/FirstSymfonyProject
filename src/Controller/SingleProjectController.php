<?php

namespace App\Controller;

use App\Entity\Projects;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class SingleProjectController extends AbstractController
{

    #[Route('/single_project/{id}', name: 'single_project')]
    public function index(int $id,Request $request,ManagerRegistry $doctrine): Response
    {	
    	 
    	$project = $doctrine->getRepository(Projects::class)->find($id);

        return $this->render('single_project/index.html.twig', [
            'project' => $project,
        ]);
    }
}
