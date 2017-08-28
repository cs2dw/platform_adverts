<?php
// src/OC/PlatformBundle/Antispam/OCAntispam.php

namespace OC\PlatformBundle\Antispam;

class OCAntispam
{
  private $mailer;
  private $locale;
  private $minLength;

  public function __construct(\Swift_Mailer $mailer, $minLength)
  {
    $this->mailer    = $mailer;
    $this->minLength = (int) $minLength;
  }
  //supprimer ce dernier des arguments du constructeur, et d'ajouter le setter correspondant 
    //il faut donc supprimer l'argument%locale% de la définition du service.yml
    // rajouter l'attribut calls à la définition du service
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /**
   * Vérifie si le texte est un spam ou non
   *
   * @param string $text
   * @return bool
   */
  public function isSpam($text)
  {
    return strlen($text) < $this->minLength;
  }
}