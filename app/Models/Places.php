<?php
namespace App\Models;
use App\Models\Simple\JSONModel;
/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Iron Man',
            'state' => 'America',
            'sex' => 'man',
            'age' => '35',
            'evaluate' => '95',
            'description' => 'Tony sibaitucker was the heir to stark industries, and his father Howard was one of the founders of SHIELD.
In a kidnapping accident, Tony creates a power-augmented suit of armor made of gold-titanium alloy that is limited and wears away.
Donning the armor, Tony transforms into the avengers tough-cop Iron Man..',
            'link' => 'https://www.marvel.com/characters/iron-man-tony-stark',
            'image' => 'ironman.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Captain America ',
            'state' => 'America',
            'sex' => 'man',
            'age' => '33',
            'evaluate' => '94',
            'description' => 'The righteous blood of captain America was originally a thin ordinary soldier during World War II, because of participating in the "Super Warrior Rebirth Project" became the only successful experiment and has the physical ability beyond ordinary people.
During The second world war, Rogers was devastated and frozen in the final battle to drive out the Red Skull, only to wake up some 70 years later.
Then he joined the Avengers.',
            'link' => 'https://www.marvel.com/characters/captain-america-steve-rogers',
            'image' => 'CaptainAmerica.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Thor',
             'state' => 'America',
             'sex' => 'man',
             'age' => '28',
            'evaluate' => '91',
            'description' => 'A non-Earthling member of the Avengers, Loki has a love-hate relationship with his younger brother.
Saul was Odins own son and heir to the throne of Asgard.
He was young, reckless, and had been banished to earth for his vanity.
Sauls main concerns were keeping peace with the nine worlds, including Asgard and Earth, and getting along with his brother Loki.
It never rains but it pours, and both things go wrong at the same time.',
            'link' => 'https://www.britannica.com/topic/Thor-Germanic-deity',
            'image' => 'Thor.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Hawkeye',
             'state' => 'America',
            'sex' => 'man',
             'age' => '31',
            'evaluate' => '93',
            'description' => 'An orphan raised in the circus, he joins the avengers after being spotted by SHIELD commander Nick fury for his superb archery.
Hawkeye moves quickly and boldly, has a low-key, calm personality, hits every shot, and is extremely good at sniping.
In marvel comics, Hawkeye has had an affair with Black Widow.
In the movie Thor, Hawkeye was arranged to shoot Thor from a high altitude.',
            'link' => 'https://www.marvel.com/characters/hawkeye-clint-barton',
            'image' => 'Hawkeye.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Loki',
            'state' => 'America',
            'sex' => 'man',
             'age' => '26',
             'evaluate' => '89',
             
            'description' => 'Loki, the war orphan of the ice Giants, was adopted by Odin, the father of all gods, and grew up with Odins own son thor.
In the process of seeking fathers love and fair treatment, Loki gradually lost his reason and balance, and his desire for power led him to the road of rebellion.
After Loki was exiled, he built a huge army and enslaved the human race, becoming the Avengers greatest enemy.',
            'link' => 'https://www.marvel.com/characters/loki',
            'image' => 'Loki.jpg',
        ],
         '6' => [
            'id' => 6,
            'name' => 'Black Widow',
             'state' => 'America',
             'sex' => 'woman',
            
              'age' => '34',
              'evaluate' => '94',
            'description' => 'Her real name is natasha romanov, a Russian female agent of the secret organization SHIELD. Her body is graceful, her face is beautiful, her mind is clear, her movements are swift, her movements are unusually strong and fierce, and she is the elite agent of SHIELD.
Natasha was initially placed inside Stark Industries to spy on Tony Stark before officially joining the Avengers..',
            'link' => 'https://www.marvel.com/characters/lokiBlack/Widow',
            'image' => 'BlackWidow.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }
  protected $origin = WRITEPATH.'data/placesData.json';
  protected $keyField = 'id';
  protected $validationRules = [];
}
