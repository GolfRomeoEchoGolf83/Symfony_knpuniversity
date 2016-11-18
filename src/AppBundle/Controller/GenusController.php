<?php
/**
 * Created by PhpStorm.
 * User: Greg
 * Date: 18/11/2016
 * Time: 12:22
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
	/**
	 * @Route("/genus/{genusName)")
	 */
	public function showAction($genusName)
	{
		return $this->render('genus/show.html.twig', array(
			'name'  => $genusName
		));
	}

	/**
	 * @param $genusName
	 * @Route("/genus/{genusName)/notes")
	 * @Method("GET")
	 *
	 * @return JsonResponse
	 */
	public function getNotesAction($genusName)
	{
		$notes = array(
			array('id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2015'),
			array('id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'I counted 8 legs... as they wrapped around me', 'date' => 'Dec. 1, 2015'),
			array('id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2015'),
		);

		$data = array(
			'notes' => $notes
		);

		return new JsonResponse($data);
	}
}