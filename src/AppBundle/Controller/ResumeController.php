<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request as Request;

class ResumeController extends Controller
{
	/**
	* @Route("/resume/show")
	*/
	public function show(Request $request)
	{
		$resumeId = $request->request->get('id');
		$resume = new Resume(resumeId);

		return $this->render('resume/resume.html.twig', [
			'name' => $resume->getName(),
			'highlight_of_qualifications' => $resume->getHighlights(),
			'work_experience' => $resume->getOtherWorkExperience(),
			'education' => $resume->getEducation(),
			'projects' => $resume->getProject(),
		]);
	}
}