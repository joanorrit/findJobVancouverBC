<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;

class NetworkingController extends Controller
{
	/**
	 * @Route("/find_a_job_bc/networking", name="networking")
	 */
	public function showInterviewQuestions()
	{
        return $this->render('networking/networking.html.twig'
        );
	}
}