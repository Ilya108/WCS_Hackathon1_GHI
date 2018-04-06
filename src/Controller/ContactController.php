<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 */

namespace Controller;

use Model\Personnage;
use Model\PersonnageManager;

/**
 * Class contactController
 * @package Controller
 */
class ContactController extends AbstractController
{

    /**
     * @return string
     */
    public function index()
    {
        session_start();

        $_SESSION['nom'] = 'test';
        while ( ($perso1->id)==NULL ) {
        $perso1 = new Personnage(rand(1,731));
        }

        $perso1->getstats();
        $perso1->getImg();
        return $this->twig->render('contact/index.html.twig', [ 'test' => $test]);


        while ( ($perso2->id == NULL) ) {
          $perso2 = new Personnage(rand(1,731));
        }
          $perso2->getstats();
          $perso2->getImg();




        return $this->twig->render('contact/index.html.twig', ['perso1' => $perso1, 'perso2' => $perso2]);

    }




}
