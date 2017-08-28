<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadAdvert.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;

class LoadAdvert implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
        // Liste des noms de catégorie à ajouter
       $tab = array(
          array(
            'title'   => 'Recherche développpeur Symfony',
            'author'  => 'Alexandre',
            'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
            'email'   => 'contactAlex@cs2dw.fr', 
            'date'    =>  new \DateTime('2017-02-23 06:12:33')),
          array(
            'title'   => 'Recherche développpeur php',
            'author'  => 'Pierre',
            'content' => 'Nous recherchons un développeur php 7 débutant sur Lyon. Blabla…',
            'email'   => 'contactPier@cs2dw.fr',   
            'date'    =>  new \DateTime('2017-02-23 06:12:33')),
          array(
            'title'   => 'Mission de webmaster',
            'author'  => 'Hugo',
            'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
            'email'   => 'contactHugo@cs2dw.fr', 
            'date'    => new \DateTime('2017-03-14 06:12:33')),
          array(
            'title'   => 'Offre de stage webdesigner',
            'author'  => 'Mathieu',
            'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
            'email'   => 'contactMat@cs2dw.fr',   
            'date'    => new \DateTime('2017-07-23 06:12:33')
        ));


        foreach ($tab as $row) {
          // On crée les annonces
           $advert = new advert();

           $advert->setTitle($row['title']);
           $advert->setAuthor($row['author']);
           $advert->setContent($row['content']);
           $advert->setEmail($row['email']);    
           $advert->setDate($row['date']);

          // On la persiste
          $manager->persist($advert);
        }

        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
  }

}
 