<?php
namespace Music\Instruments;
use \Music\Instruments\Instrument;

class Bass implements Instrument
{
  private $name = 'Bass';
  private $type = 'string';

  public function getName() : string
  {
    return $this->name;
  }
  public function getType() : string
  {
    return $this->type;
  }
}
