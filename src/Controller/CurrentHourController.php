<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
   /**
     * @Route("/controller)
     */

class CurrentHourController extends AbstractController
{
    /**
     * @Route("/current/hour/{nom},name="current-hour")
     */
    public function index()
    {
        $hour = date("h:i:sa")
        return $this->render('current_Hour/index.html.twig', [
            'time' => $hour,
        ]);
    }
}
