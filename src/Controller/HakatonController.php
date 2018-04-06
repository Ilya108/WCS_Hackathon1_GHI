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

        for ($i=1; $i < 19 ; $i++) {
          $Perso[$i] = new Personnage(rand(0,700));
          while ($Perso[$i]->id == NULL) {
            $Perso[$i] = new Personnage(rand(0,700));
          }

          $_SESSION['Perso'.$i] = array($Perso[$i]);
        }

         return $this->twig->render('Hakaton/choise1.html.twig', ['Perso' => $Perso ]);

        }



    public function choise2()
    {
      session_start();
        GLOBAL $persoid1;
        $_SESSION['persoid1'] = $_POST['Perso1'];
        echo $_SESSION['persoid1'];

          GLOBAL $Perso;

          for ($i=1; $i < 19 ; $i++) {
            $Perso[$i] = new Personnage(rand(0,700));
            while ($Perso[$i]->id == NULL) {
              $Perso[$i] = new Personnage(rand(0,700));
            }

            $_SESSION['Perso'.$i] = array($Perso[$i]);
          }

           return $this->twig->render('Hakaton/choise2.html.twig', ['Perso' => $Perso ]);

      }
}
