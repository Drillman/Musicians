<?php

namespace Music;

use Music\Band;

class Concert {
  private $band;
  private $name;

  public function __construct(String $name, Band $band)
  {
    $this->name = $name;
    $this->band = $band;
  }

  public function displayConcert() : string
  {
    $presentation = "It's a ".$this->band->getMusicType()." concert named ".$this->name." with the band ".$this->band->getName();
    $presentation .="</br>This band is composed of : </br>";
    foreach($this->band->getMusicians() as $musician) {
      $presentation .= "- ".$musician->getName()." playing ".$musician->getInstrument()->getName()." (".$musician->getInstrument()->getType().") </br>";
    }

    return $presentation;
  }
}
