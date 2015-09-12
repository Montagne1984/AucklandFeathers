<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of AccountController
 *
 * @author 峰
 */
class AccountController extends Controller {
    /**
     * @Route("/login", name="loginpage")
     */
    public function loginAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('account/login.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
