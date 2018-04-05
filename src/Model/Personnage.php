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
  public $vie;
  public $intelligence;
  public $strength;
  public $speed;
  public $durability;
  public $power;
  public $combat;
  public $img;

    /**
     * @return mixed
     */



     public function attack()
     {
      if ($perso1) {

        $perso2->setVie()

      }

     }


    public function getstats()
    {
      return
         $this->id;
         $this->name;
         $this->vie;
         $this->intelligence;
         $this->strength;
         $this->speed;
         $this->durability;
         $this->power;
         $this->combat;
    }
    
    
    public function getImg()
    {
        return 
            $this->img;
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
     * Get the value of Class Item
     *
     * @return mixed
     */
    public function getPersonnage()
    {
        return $this->personnage;
    }

    /**
     * Set the value of Class Item
     *
     * @param mixed personnage
     *
     * @return self
     */
    public function setPersonnage($personnage)
    {
        $this->personnage = $personnage;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Intelligence
     *
     * @return mixed
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * Set the value of Intelligence
     *
     * @param mixed intelligence
     *
     * @return self
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    /**
     * Get the value of Strength
     *
     * @return mixed
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set the value of Strength
     *
     * @param mixed strength
     *
     * @return self
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get the value of Speed
     *
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of Speed
     *
     * @param mixed speed
     *
     * @return self
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get the value of Durability
     *
     * @return mixed
     */
    public function getDurability()
    {
        return $this->durability;
    }

    /**
     * Set the value of Durability
     *
     * @param mixed durability
     *
     * @return self
     */
    public function setDurability($durability)
    {
        $this->durability = $durability;

        return $this;
    }

    /**
     * Get the value of Power
     *
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set the value of Power
     *
     * @param mixed power
     *
     * @return self
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get the value of Combat
     *
     * @return mixed
     */
    public function getCombat()
    {
        return $this->combat;
    }

    /**
     * Set the value of Combat
     *
     * @param mixed combat
     *
     * @return self
     */
    public function setCombat($combat)
    {
        $this->combat = $combat;

        return $this;
    }



    /**
     * Get the value of Vie
     *
     * @return mixed
     */
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * Set the value of Vie
     *
     * @param mixed vie
     *
     * @return self
     */
    public function setVie($vie)
    {
        $this->vie = $vie;

        return $this;
    }

}
