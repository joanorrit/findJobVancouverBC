<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;

class HomeController extends Controller
{
	/**
	 * @Route("/", name="home")
	 */
	public function showHomeQuestions()
	{
        return $this->render('home/home.html.twig');
	}
}