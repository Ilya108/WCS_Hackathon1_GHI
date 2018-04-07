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

        session_start();

        GLOBAL $Perso;

        for ($i=1; $i <= 24 ; $i++) {

          $id = mt_rand(0,731);
          $Perso[$i] = new Personnage($id);

          $_SESSION['Perso'.$i] = array($Perso[$i]);
          }

         return $this->twig->render('Hakaton/choise1.html.twig', ['Perso' => $Perso ]);

        }



    public function choise2()
    {
      session_start();
        $_SESSION['persoid1'] = $_POST['Perso1'];

          GLOBAL $Perso;

          for ($i=1; $i < 24 ; $i++) {

            $id = mt_rand(0,731);
            $Perso[$i] = new Personnage($id);

            $_SESSION['Perso'.$i] = array($Perso[$i]);
            }

           return $this->twig->render('Hakaton/choise2.html.twig', ['Perso' => $Perso ]);

      }
}
