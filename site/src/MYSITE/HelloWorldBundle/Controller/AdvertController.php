<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 14/06/2018
 * Time: 17:15
 */

namespace MYSITE\HelloWorldBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    function indexAction(){
        $content = $this
            ->get('templating')
            ->render('MYSITEHelloWorldBundle:Advert:index.html.twig', array('nom' => 'winzou'));
        return new Response($content);
    }

}