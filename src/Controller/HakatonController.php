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
   /*         session_start();
    GLOBAL $Perso1;
    GLOBAL $Perso2;

    while ($Perso1->id == NULL) {
      $Perso1 = new Personnage(rand(0,700));
    }

    $_SESSION['Perso1'] = array($Perso1);


    while ($Perso2->id == NULL) {
      $Perso2 = new Personnage(rand(0,700));
    }

    $_SESSION['Perso2'] = array($Perso2);
*/


        

       for($i = 1; $i < 18; $i++){
        echo $i;
        
        
        GLOBAL ${'test'.$i};
        
           
        while (${'test'.$i}->id == NULL) {
            ${'test'.$i} = new Personnage(rand(0,700));
    
        }
           var_dump(${'test'.$i});
        ${'test'.$i}->getstats();
        ${'test'.$i}->getImg();
        $_SESSION['test1'] = array($test1);
        
       }
        
        
         return $this->twig->render('Hakaton/choise1.html.twig', [ for($i = 1; $i < 18; $i++) {'test'.$i => ${'test'.$i} ]);
            
        }
        
       
       

                            

    public function choise2()
    {
        $test = new Personnage(rand(0,731));
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
