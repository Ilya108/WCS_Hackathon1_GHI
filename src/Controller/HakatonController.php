<?php
namespace Controller;

use Model\Personnage;
use Model\PersonnageManager;

/**
 * Class contactController
 * @package Controller
 */
class HakatonController extends AbstractController
{

    /**
     * @return string
     */
    public function accueil()
    {
        $test = new Personnage(10);
        $test->getstats();


        return $this->twig->render('Hakaton/accueil.html.twig', [ 'test' => $test]);

    }

    /**
     * @return string
     */
    public function choise1()
    {
        $test = new Personnage(10);
        $test->getstats();
        $test->getImg();


        return $this->twig->render('Hakaton/choise1.html.twig', [ 'test' => $test]);

    }

    public function choise2()
    {
        $test = new Personnage(10);
        $test->getstats();
        $test->getImg();


        return $this->twig->render('Hakaton/choise2.html.twig', [ 'test' => $test]);

    }

    /**
     * @return string
     */
    public function fight()
    {
        $test = new Personnage(10);
        $test->getstats();


        return $this->twig->render('Hakaton/fight.html.twig', [ 'test' => $test]);

    }
}
