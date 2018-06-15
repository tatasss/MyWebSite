<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 15/06/2018
 * Time: 14:38
 */

namespace APP\coreBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('APPcoreBundle:index:index.html.twig');
    }
}