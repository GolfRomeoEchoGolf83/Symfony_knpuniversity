<?php
/**
 * Created by PhpStorm.
 * User: Greg
 * Date: 18/11/2016
 * Time: 12:22
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
	/**
	 * @Route("/genus/{genusName")
	 */
	public function showAction($genusName)
	{
		$templating = $this->container->get('templating');
		$html = $templating->render('genus/show.html.twig'), array(
			'name'  => $genusName
	);

		return new Response('The genus: ' .$genusName);
	}
}