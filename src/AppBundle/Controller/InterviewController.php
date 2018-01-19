<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;

class InterviewController extends Controller
{
	/**
	 * @Route("/find_a_job_bc/interview", name="interview")
	 */
	public function showInterviewQuestions()
	{
        return $this->render('Interview/interview.html.twig');
	}
}