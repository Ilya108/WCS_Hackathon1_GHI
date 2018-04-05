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
        $test = new Personnage(rand(0,731));
        $test->getstats();
        $test->getImg();


        return $this->twig->render('contact/index.html.twig', [ 'test' => $test]);

    }

    /**
     * @param $id
     * @return string
     */
    public function show(int $id)
    {
        $contactManager = new contactManager();

        $contact = $contactManager->findOneById($id);

        return $this->twig->render('contact/show.html.twig', ['contact' => $contact]);
    }

    public function getstats($id)
    {
        $contactManager = new contactManager();

        $contact = $contactManager->findOneById($id);

        return $this->twig->render('contact/show.html.twig', ['contact' => $contact]);
    }

    /**
     * @param $id
     * @return string
     */
    public function edit(int $id)
    {
        // TODO : edit contact with id $id
        return $this->twig->render('contact/edit.html.twig', ['contact', $id]);
    }

    /**
     * @param $id
     * @return string
     */
    public function add()
    {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ContactManager = new contactManager();
        $contact = $ContactManager->insert("$_POST[lastname]", "$_POST[firstname]", "$_POST[civility]");
      }
        return $this->twig->render('contact/index.html.twig');
    }

    /**
     * @param $id
     * @return string
     */
    public function delete()
    {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ContactManager = new contactManager();
        $contact = $ContactManager->delete("$_POST[ID]");
      }
        return $this->twig->render('contact/index.html.twig');
    }
}
