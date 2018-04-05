<?php
/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 23/10/17
 * Time: 10:57
 */

namespace Model;

/**
 * Class Item
 * @package Model
 */
class Personnage extends PersonnageManager
{

  public $personnage;
  public $id;
  public $name;
  public $intelligence;
  public $strength;
  public $speed;
  public $durability;
  public $power;
  public $combat;

    /**
     * @return mixed
     */
    public function getstats()
    {
      return
         $this->id;
         $this->name;
         $this->vie;
         $this->intelligence;
         $this->name;
         $this->intelligence;
         $this->strength;
         $this->speed;
         $this->durability;
         $this->power;
         $this->combat;
    }

    /**
     * @param mixed $id
     * @return Item
     */

     public function getId()
     {
          return $this->id;
     }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Item
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }



}
