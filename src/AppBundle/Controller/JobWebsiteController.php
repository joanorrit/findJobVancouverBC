<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;

class JobWebsiteController extends Controller
{
	/**
	 * @Route("/find_a_job_bc/best_websites", name="best_webistes")
	 */
	public function showBestWebsites()
	{
		$dataBaseAccess = $this->getDoctrine()->getManager();

        $jobWebsites = $dataBaseAccess->getRepository('AppBundle:JobWebsite')
            ->findAll();

        return $this->render('FindAJob/BestWebsites/best_websites.html.twig', [
            'jobWebsites' => $jobWebsites
        ]);
	}
}