<?php

namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\BlogBundle\Form\PageType;
use Acme\BlogBundle\Entity\Page;

class PageController extends Controller
{
    /**
     * @Route("/getPage")
     * @Template()
     */
    public function getPageAction()
    {
    	$page = new Page();
    	$form = $this->createForm(new PageType(), $page);
    	return $this->render('AcmeBlogBundle:Page:getPage.html.twig', array ('form' => $form->createView()));
    }

}
