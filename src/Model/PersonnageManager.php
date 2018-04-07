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
    while (file('/home/naashw/Documents/Wcs_odyssey/Hackathon/superhero-api/api/id/'.$id.'.json') == FALSE ) {
      $id = mt_rand(0,731);
    }
    $persoJson =  file_get_contents('/home/naashw/Documents/Wcs_odyssey/Hackathon/superhero-api/api/id/'.$id.'.json');
    $personnage = json_decode($persoJson, true);
    $this->id = $personnage['id'];
    $this->image = $personnage['images']['sm'];
    $this->name = $personnage['name'];
    $this->intelligence = $personnage['powerstats']['intelligence'];
    $this->strength = $personnage['powerstats']['strength'];
    $this->speed = $personnage['powerstats']['speed'];
    $this->durability = $personnage['powerstats']['durability'];
    $this->power = $personnage['powerstats']['power'];
    $this->combat = $personnage['powerstats']['combat'];
    $this->vie = 200;
    $this->imgXs = $personnage['images']['xs'];
    $this->imgSm = $personnage['images']['sm'];
    $this->imgMd = $personnage['images']['md'];
    $this->gender = $personnage['appearance']['gender'];
    $this->race = $personnage['appearance']['race'];
    $this->height = $personnage['appearance']['height'][1];
    $this->weight = $personnage['appearance']['weight'][1];
    $this->eyeColor = $personnage['appearance']['eyeColor'];
    $this->hairColor = $personnage['appearance']['hairColor'];
    $this->fullName = $personnage['biography']['fullName'];
    $this->alterEgos = $personnage['biography']['alterEgos'];
    $this->aliases = $personnage['biography']['aliases'][0];
    $this->placeOfBirth = $personnage['biography']['placeOfBirth'];
    $this->firstAppearance = $personnage['biography']['firstAppearance'];
    $this->publisher = $personnage['biography']['publisher'];
    $this->alignment = $personnage['biography']['alignment'];
    $this->occupation = $personnage['work']['occupation'];
    $this->base = $personnage['work']['base'];
    $this->groupAffiliation = $personnage['connections']['groupAffiliation'];
    $this->relatives = $personnage['connections']['relatives'];





  }

}
