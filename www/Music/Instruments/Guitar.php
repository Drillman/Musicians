<?php
namespace Music\Instruments;
use \Music\Instruments\Instrument;

class Guitar implements Instrument
{
  private $name = 'Guitar';
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
