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
    $_SESSION['Perso2'] = $_POST['Perso2'];
    GLOBAL $Perso1;
    GLOBAL $Perso2;

    while ($Perso1->id == NULL) {
      $Perso1 = new Personnage($_SESSION['Perso1']);
    }

    $_SESSION['Perso1'] = array($Perso1);


    while ($Perso2->id == NULL) {
      $Perso2 = new Personnage($_SESSION['Perso2']);
    }

    $_SESSION['Perso2'] = array($Perso2);




    return $this->twig->render('contact/index.html.twig', [ 'Perso1' => $Perso1,  'Perso2' => $Perso2 ]);

  }

  /**
  * @param $id
  * @return string
  */
  public function attack1()
  {
    session_start();

    $persoid2 = $_SESSION['persoid2'] = $_POST['Perso2'];
    $persoid1 = $_SESSION['persoid1'];


    $Perso1=new Personnage($persoid2);
    $Perso2=new Personnage($persoid1);

    if ($Perso1->speed >= $Perso2->speed) {

      if ($Perso1->strength > $Perso1->intelligence) {
        $Attaque1 =(($Perso2->vie) - (($Perso1->strength) * ((100+$Perso1->combat)/100) * ((120-($Perso2->durability)) /100))
      * (mt_rand(30,50)/100) );
      }elseif ($Perso1->strength < $Perso1->intelligence) {
        $Attaque1 =(($Perso2->vie) - (($Perso1->intelligence) * ((100+$Perso1->power)/100) * ((120-($Perso2->durability)) /100))
      * (mt_rand(30,50)/100));
      }

      $Perso2->setVie($Attaque1);


    }elseif ($Perso1->speed < $Perso2->speed) {

      if ($Perso2->strength > $Perso2->intelligence) {
        $Attaque2 =(($Perso1->vie) - (($Perso2->strength) * ((100+$Perso2->combat)/100) * ((120-($Perso1->durability)) /100))
      * (mt_rand(30,50)/100));
      }elseif ($Perso2->strength < $Perso2->intelligence) {
        $Attaque2 =(($Perso1->vie) - (($Perso2->intelligence) * ((100+$Perso2->power)/100) * ((120-($Perso1->durability)) /100))
      * (mt_rand(30,50)/100));
      }
      $Perso1->setVie($Attaque2);
    }

    if ( ($Perso1->vie > 0) && ($Perso2->vie > 0) ) {
        return $this->twig->render('Hakaton/fight1.html.twig', [ 'Perso1' => $Perso1, 'Perso2' => $Perso2 ]);
    }elseif ( ($Perso1->vie) < 1 ) {
      echo "Perso 2 gagne";
    }elseif ($Perso2->vie < 1 ) {
      echo "Perso 1 gagne";
    }


  }

  public function attack2()
  {
    session_start();

    $persoid2 = $_SESSION['persoid2'];
    $persoid1 = $_SESSION['persoid1'];

    $Perso1=$_SESSION[$persoid1];
    $Perso2=$_SESSION[$persoid2];

    if ($Perso1->speed < $Perso2->speed) {

      if ($Perso1->strength > $Perso1->intelligence) {
        $Attaque1 =(($Perso2->vie) - (($Perso1->strength) * ((100+$Perso1->combat)/100) * ((120-($Perso2->durability)) /100))
      * (mt_rand(30,50)/100) );
      }elseif ($Perso1->strength < $Perso1->intelligence) {
        $Attaque1 =(($Perso2->vie) - (($Perso1->intelligence) * ((100+$Perso1->power)/100) * ((120-($Perso2->durability)) /100))
      * (mt_rand(30,50)/100));
      }

      $Perso2->setVie($Attaque1);

    }elseif ($Perso1->speed >= $Perso2->speed) {

      if ($Perso2->strength > $Perso2->intelligence) {
        $Attaque2 =(($Perso1->vie) - (($Perso2->strength) * ((100+$Perso2->combat)/100) * ((120-($Perso1->durability)) /100))
      * (mt_rand(30,50)/100));
      }elseif ($Perso2->strength < $Perso2->intelligence) {
        $Attaque2 =(($Perso1->vie) - (($Perso2->intelligence) * ((100+$Perso2->power)/100) * ((120-($Perso1->durability)) /100))
      * (mt_rand(30,50)/100));
      }
      $Perso1->setVie($Attaque2);
    }


    return $this->twig->render('Hakaton/fight2.html.twig', [ 'Perso1' => $Perso1, 'Perso2' => $Perso2 ]);

  }

}
