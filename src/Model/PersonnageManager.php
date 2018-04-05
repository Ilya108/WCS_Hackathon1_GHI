<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 */

namespace Model;


class PersonnageManager
{


  function __construct($id)
  {
    $persoJson = file_get_contents('https://akabab.github.io/superhero-api/api/id/'.$id.'.json');
    $personnage = json_decode($persoJson, true);
    $this->id = $personnage['id'];
    $this->name = $personnage['name'];
    $this->intelligence = $personnage['powerstats']['intelligence'];
    $this->strength = $personnage['powerstats']['strength'];
    $this->speed = $personnage['powerstats']['speed'];
    $this->durability = $personnage['powerstats']['durability'];
    $this->power = $personnage['powerstats']['power'];
    $this->combat = $personnage['powerstats']['combat'];
    $this->vie = 100;


  }

}
