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
        $test = new Personnage(10);
        $test->getstats();

        return $this->twig->render('contact/index.html.twig', [ 'test' => $test]);

    }

    /**
     * @param $id
     * @return string
     */
     
/*    public function show(int $id)
    {
        $contactManager = new contactManager();

        $contact = $contactManager->findOneById($id);

        return $this->twig->render('contact/show.html.twig', ['contact' => $contact]);
    } */


}
