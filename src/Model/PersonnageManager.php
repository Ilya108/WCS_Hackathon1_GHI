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
    $persoJson = file_get_contents('https://cdn.rawgit.com/akabab/superhero-api/0.2.0/api/id/'.$id.'.json');
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
    $this−>imgSm = $personnage['images']['sm'];
    $this->imgMd = $personnage['images']['md'];



  }

}
