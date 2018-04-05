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


        while ( ($perso2->id == NULL) ) {
          $perso2 = new Personnage(rand(1,731));
        }
          $perso2->getstats();
          $perso2->getImg();




        return $this->twig->render('contact/index.html.twig', ['perso1' => $perso1, 'perso2' => $perso2]);

    }

    /**
     * @param $id
     * @return string
     */
     public function attack()
     {

      $perso1=$_GET['$perso1'];
      $perso2=$_GET['$perso2'];
       if ($perso1) {
          $perso2->setVie($perso1->Degats);
       }
       if ($perso2) {
          $perso1->setVie($perso2->Degats);
       }
        echo $perso1->vie;
        echo $perso2->vie;
         return $this->twig->render('contact/index.html.twig', ['perso1' => $perso1, 'perso2' => $perso2]);

     }




}
