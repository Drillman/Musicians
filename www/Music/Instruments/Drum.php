<?php
namespace Music\Instruments;
use \Music\Instruments\Instrument;

class Drum implements Instrument
{
  private $name = 'Drum';
  private $type = 'percution';

  public function getName() : string
  {
    return $this->name;
  }
  public function getType() : string
  {
    return $this->type;
  }
}
