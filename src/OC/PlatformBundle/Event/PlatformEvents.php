<?php
// src/OC/PlatformBundle/Event/PlatformEvents.php

/*Cette classe ne fait donc rien, elle ne sert qu'à faire la correspondance entrePlatformEvents::POST_MESSAGE qu'on utilisera pour déclencher l'évènement et le nom de l'évènement en lui mêmeoc_platform.post_message.*/

namespace OC\PlatformBundle\Event;

final class PlatformEvents
{
  const POST_MESSAGE = 'oc_platform.post_message';
  // Vos autres évènements…
}