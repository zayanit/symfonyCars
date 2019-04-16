<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CarsController extends AbstractController
{
    /**
     * @Route("/our-cars", name="ourCars")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $cars = [
            ['make' => 'Toyota' , 'name' => 'Corolla'],
            ['make' => 'Hyundai', 'name' => 'Elentra' ],
            ['make' => 'Kia'    , 'name' => 'Cerato' ],
            ['make' => 'Nissan' , 'name' => 'Sentra' ]
        ];

        //return $this->render('cars/our-cars.html.twig', ['cars' => $cars]);
        return $this->render('cars/our-cars.html.twig', compact('cars'));
    }
}