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
        $Perso1 = new Personnage(rand(0,700));
        $Perso1->getstats();


        return $this->twig->render('contact/index.html.twig', [ 'test' => $Perso1]);

    }

    /**
     * @param $id
     * @return string
     */
     public function attack()
     {
          if ($perso1) {

            $perso2->setVie();11

      }

     }


}
