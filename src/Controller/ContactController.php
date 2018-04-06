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
    GLOBAL $Perso1;
    GLOBAL $Perso2;

    while ($Perso1->id == NULL) {
      $Perso1 = new Personnage(rand(0,700));
    }

    $_SESSION['Perso1'] = array($Perso1);
    $Perso1->getstats();

    while ($Perso2->id == NULL) {
      $Perso2 = new Personnage(rand(0,700));
    }

    $_SESSION['Perso2'] = array($Perso2);

    $Perso2->getstats();


    return $this->twig->render('contact/index.html.twig', [ 'Perso1' => $Perso1,  'Perso2' => $Perso2 ]);

  }

  /**
  * @param $id
  * @return string
  */
  public function attack()
  {
    session_start();
    var_dump($_SESSION['Perso1']);

    $Perso1=$_SESSION['Perso1'];
    $Perso2=$_SESSION['Perso2'];

    if ($Perso1[0]->speed >= $Perso2[0]->speed) {

      if ($Perso1[0]->strength > $Perso1[0]->intelligence) {
        $Attaque1 =(($Perso2[0]->vie) - (($Perso1[0]->strength) * ((100+$Perso1[0]->combat)/100) * ((120-($Perso2[0]->durability)) /100))
      * (mt_rand(30,50)/100) );
      }elseif ($Perso1[0]->strength < $Perso1[0]->intelligence) {
        $Attaque1 =(($Perso2[0]->vie) - (($Perso1[0]->intelligence) * ((100+$Perso1[0]->power)/100) * ((120-($Perso2[0]->durability)) /100))
      * (mt_rand(30,50)/100));
      }

      $Perso2[0]->setVie($Attaque1);


    }elseif ($Perso1[0]->speed < $Perso2[0]->speed) {

      if ($Perso2[0]->strength > $Perso2[0]->intelligence) {
        $Attaque2 =(($Perso1[0]->vie) - (($Perso2[0]->strength) * ((100+$Perso2[0]->combat)/100) * ((120-($Perso1[0]->durability)) /100))
      * (mt_rand(30,50)/100));
      }elseif ($Perso2[0]->strength < $Perso2[0]->intelligence) {
        $Attaque2 =(($Perso1[0]->vie) - (($Perso2[0]->intelligence) * ((100+$Perso2[0]->power)/100) * ((120-($Perso1[0]->durability)) /100))
      * (mt_rand(30,50)/100));
      }
      $Perso1[0]->setVie($Attaque2);
    }


    return $this->twig->render('contact/index.html.twig', [ 'Perso1' => $Perso1[0], 'Perso2' => $Perso2[0] ]);

  }

}
