<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request as Request;

class ResumeController extends Controller
{
	/**
	* @Route("/find_a_job_bc/resume", name="resume")
	*/
	public function show(Request $request)
	{
		return $this->render('resume/resume.html.twig');
	}
}