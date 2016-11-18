<?php
/**
 * Created by PhpStorm.
 * User: Greg
 * Date: 18/11/2016
 * Time: 12:22
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
	/**
	 * @Route("/genus")
	 */
	public function showAction()
	{
		return new Response('Under the Sea');
	}
}