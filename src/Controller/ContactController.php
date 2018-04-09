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

  public function test()
  {
    for ($i=0; $i <= 18 ; $i++) {
      $id = mt_rand(0,731);
      echo $id.'<br>';
    }

  }

  public function index()
  {



    return $this->twig->render('Hakaton/accueil.html.twig');
  }

  public function partie()
  {

    session_start();
    $persoid2 = $_SESSION['persoid2'] = $_POST['Perso2'];
    $persoid1 = $_SESSION['persoid1'];

    GLOBAL $Perso1;
    GLOBAL $Perso2;


    $Perso1=new Personnage($persoid2);

    $_SESSION['Perso1'] = array($Perso1);


    $Perso2=new Personnage($persoid1);

    $_SESSION['Perso2'] = array($Perso2);




    return $this->twig->render('Hakaton/fight.html.twig', [ 'Perso1' => $Perso1,  'Perso2' => $Perso2]);

  }

  /**
  * @param $id
  * @return string
  */
  public function attack1()
  {
    session_start();

    $Perso1=$_SESSION['Perso1'];
    $Perso2=$_SESSION['Perso2'];


    if ($Perso1[0]->speed >= $Perso2[0]->speed) {
      $joueur = $Perso1[0]->name;

      if ($Perso1[0]->strength >= $Perso1[0]->intelligence) {

        $Attaque = ($Perso1[0]->strength) * ((100+$Perso1[0]->combat)/100);
        $DefAdverse = ((120-($Perso2[0]->durability)) /100);
        $Rand = (mt_rand(10,50)/100);
        $Attaque = round(($Attaque * $Rand) * $DefAdverse);
        $Degats = $Perso2[0]->vie - $Attaque;

      }elseif ($Perso1[0]->strength < $Perso1[0]->intelligence) {
        $Attaque =($Perso1[0]->intelligence) * ((100+$Perso1[0]->power)/100);
        $DefAdverse = ((120-($Perso2[0]->durability)) /100);
        $Rand = (mt_rand(10,50)/100);
        $Attaque = round(($Attaque * $Rand) * $DefAdverse);
        $Degats = $Perso2[0]->vie - $Attaque;

      }

      $Perso2[0]->setVie($Degats);
      $text =  $Perso1[0]->name.' à attaquer de '.$Attaque;

    }elseif ($Perso1[0]->speed < $Perso2[0]->speed) {
      $joueur = $Perso2[0]->name;
      if ($Perso2[0]->strength >= $Perso2[0]->intelligence) {
        $Attaque = ($Perso2[0]->strength) * ((100+$Perso2[0]->combat)/100);
        $DefAdverse = ((120-($Perso1[0]->durability)) /100);
        $Rand = (mt_rand(10,50)/100);
        $Attaque = round(($Attaque * $Rand) * $DefAdverse);
        $Degats = $Perso1[0]->vie - $Attaque;

      }elseif ($Perso2[0]->strength < $Perso2[0]->intelligence) {
        $Attaque =($Perso2[0]->intelligence) * ((100+$Perso2[0]->power)/100);
        $DefAdverse = ((120-($Perso1[0]->durability)) /100);
        $Rand = (mt_rand(10,50)/100);
        $Attaque = round(($Attaque * $Rand) * $DefAdverse);
        $Degats = $Perso1[0]->vie - $Attaque;

      }$Perso1[0]->setVie($Degats);
        $text =  $Perso2[0]->name.' à attaquer de '.$Attaque;


    }

        //            $text = "$text|nl2br".$_POST['informations'];

   if ( ($Perso1[0]->vie > 0) && ($Perso2[0]->vie > 0) ) {
      return $this->twig->render('Hakaton/fight1.html.twig', [ 'Perso1' => $Perso1[0], 'Perso2' => $Perso2[0], 'text' => $text, 'joueur' => $joueur  ]);
   }elseif ( ($Perso1[0]->vie) < 1 ) {
    echo $Perso2[0]->name." A gagner !";
  }elseif ($Perso2[0]->vie < 1 ) {
    echo $Perso1[0]->name." A gagner !";

  }
  }

  public function attack2()
  {
    session_start();

    $Perso1=$_SESSION['Perso1'];
    $Perso2=$_SESSION['Perso2'];

    if ($Perso1[0]->speed >= $Perso2[0]->speed) {

      $joueur = $Perso2[0]->name;

      if ($Perso2[0]->strength >= $Perso2[0]->intelligence) {
        $Attaque = ($Perso2[0]->strength) * ((100+$Perso2[0]->combat)/100);
        $DefAdverse = ((120-($Perso1[0]->durability)) /100);
        $Rand = (mt_rand(10,50)/100);
        $Attaque = round(($Attaque * $Rand) * $DefAdverse);
        $Degats = $Perso1[0]->vie - $Attaque;


      }elseif ($Perso2[0]->strength < $Perso2[0]->intelligence) {
        $Attaque =($Perso2[0]->intelligence) * ((100+$Perso2[0]->power)/100);
        $DefAdverse = ((120-($Perso1[0]->durability)) /100);
        $Rand = (mt_rand(10,50)/100);
        $Attaque = round(($Attaque * $Rand) * $DefAdverse);
        $Degats = $Perso1[0]->vie - $Attaque;


      }$Perso1[0]->setVie($Degats);

    $text =  $Perso2[0]->name.' à attaquer de '.$Attaque;


    }elseif ($Perso1[0]->speed < $Perso2[0]->speed)
    {
      $joueur = $Perso1[0]->name;
      if ($Perso1[0]->strength >= $Perso1[0]->intelligence) {

        $Attaque = ($Perso1[0]->strength) * ((100+$Perso1[0]->combat)/100);
        $DefAdverse = ((120-($Perso2[0]->durability)) /100);
        $Rand = (mt_rand(10,50)/100);
        $Attaque = round(($Attaque * $Rand) * $DefAdverse);
        $Degats = $Perso2[0]->vie - $Attaque;



      }elseif ($Perso1[0]->strength < $Perso1[0]->intelligence) {
        $Attaque =($Perso1[0]->intelligence) * ((100+$Perso1[0]->power)/100);
        $DefAdverse = ((120-($Perso2[0]->durability)) /100);
        $Rand = (mt_rand(10,50)/100);
        $Attaque = round(($Attaque * $Rand) * $DefAdverse);
        $Degats = $Perso2[0]->vie - $Attaque;

      }

      $Perso2[0]->setVie($Degats);
      $text =  $Perso1[0]->name.' à attaquer de '.$Attaque;
    }


  //    $text = $text.$_POST['informations'];

    if ( ($Perso1[0]->vie > 0) && ($Perso2[0]->vie > 0) ) {
      return $this->twig->render('Hakaton/fight2.html.twig', [ 'Perso1' => $Perso1[0], 'Perso2' => $Perso2[0], 'text' => $text, 'joueur' => $joueur ]);
    }elseif ( ($Perso1[0]->vie) < 1 ) {
      echo $Perso2[0]->name." A gagner !";
    }elseif ($Perso2[0]->vie < 1 ) {
      echo $Perso1[0]->name." A gagner !";
    }
  }

}
