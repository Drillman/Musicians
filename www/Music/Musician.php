<?php

namespace Music;

use \Music\Instruments\Instrument;

class Musician {
  private $instrument;
  private $name;

  public function __construct(String $name, Instrument $instrument){
    $this->name = $name;
    $this->instrument = $instrument;
  }

  public function getName() : string
  {
    return $this->name;
  }

  public function getInstrument() : Instrument
  {
    return $this->instrument;
  }
}
