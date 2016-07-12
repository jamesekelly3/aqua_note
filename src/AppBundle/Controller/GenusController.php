<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 12/07/16
 * Time: 1:36 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        $notes = [
            'My name is James',
            'I thought I was failing...',
            'turns out, I am becoming one hell of a coder'
        ];
      return $this->render('genus/show.html.twig', [
            'name'=> $genusName,
            'notes'=> $notes
        ]);

    }
}