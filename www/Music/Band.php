<?php

namespace Music;

use Musician;

class Band
{
  private $musicians;
  private $name;
  private $musicType;

  public function __construct(String $name, String $musicType, array $musicians)
  {
    $this->name = $name;
    $this->musicType = $musicType;
    $this->musicians = $musicians;
  }

  public function getName() : string
  {
    return $this->name;
  }
  public function getMusicType() : string
  {
    return $this->musicType;
  }
  public function getMusicians() : array
  {
    return $this->musicians;
  }
}
