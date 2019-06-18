<?php

use Music\Concert;
use Music\Band;
use Music\Musician;
use Music\Instruments\{Instrument, Trompette, Guitar, Drum};

require __DIR__.'/vendor/autoload.php';

function randomValueOf(array $array)
{
  return $array[rand(0, sizeof($array) -1)];
}
function createConcert() {
  $instruments = [
    new Trompette,
    new Guitar,
    new Drum
  ];
  $names =[
    'Marti Stillings',
    'Leesa Eckart',
    'Rocky Constantino',
    'Carlota Schwindt',
    'Evia Franko',
    'Juli Floyd',
    'Lauren Detty',
    'Thi Bonetti',
    'Cherrie Schull'
  ];
  $concertsName = ['Woodstock', 'Hell Fest', 'Cochella'];
  $musicTypes = ['Rock', 'Metal','Electro', 'Rap', 'Hip hop', 'pop'];
  $bandsName = [
    'The Beatles',
    'The Rolling Stones',
    'Led Zeppelin',
    'The Doors',
    'Pink Floyd',
    'The Beach Boys',
    'The Who'
  ];

  $musicians = [];
  for($i = 0; $i< 5; $i++){
    array_push($musicians, new Musician(randomValueOf($names), randomValueOf($instruments)));
  }

  $band = new Band(randomValueOf($bandsName), randomValueOf($musicTypes), $musicians);

  $concert = new Concert(randomValueOf($concertsName), $band);

  echo $concert->displayConcert();
}

echo "<h1>List of concert</h1>";
for($i=0;$i<4;$i++){
  createConcert();
  echo '<hr>';
}
