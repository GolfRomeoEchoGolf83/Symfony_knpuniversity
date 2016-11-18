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
	 * @Route("/genus/{genusName)")
	 */
	public function showAction($genusName)
	{
		$notes = array(
			'Octopus asked me a riddle, outsmarted me',
			'I counted 8 legs... as they wrapped around me',
			'Inked!'
		);

		return $this->render('genus/show.html.twig', array(
			'name'  => $genusName
		));
	}
}