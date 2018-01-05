<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;

class BestWebsitesController extends Controller
{
	/**
	 * @Route("/find/job/best/websites")
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