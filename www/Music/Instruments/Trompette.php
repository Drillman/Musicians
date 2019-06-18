<?php
namespace Music\Instruments;

use \Music\Instruments\Instrument;

class Trompette implements Instrument
{
  private $name = 'Trompette';
  private $type = 'wind';

  public function getName() : string
  {
    return $this->name;
  }
  public function getType() : string
  {
    return $this->type;
  }
}
