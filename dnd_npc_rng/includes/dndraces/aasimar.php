<?php

// Aasimar

$isAasimar = true;
$isFallen = rand(1, 20);
if ($isFallen > 14) {
    $race = "Fallen Aasimar";
}
/*
Aasimar are typically named in accordance with human traditions.
*/

if ($gender == 'male') {
    $malenames = [
        'Aritian', 'Beltin', 'Cernan', 'Cronwier', 'Eran', 'Ilamin',
        'Maudril', 'Okrin', 'Parant', 'Tural', 'Wyran', 'Zaigan',
        'Hunin', 'Kyor',
    ];
    $firstname = array_rand(array_flip($malenames), 1);
}

if ($gender == 'female') {
    $femalenames = [
        'Arken', 'Arsinoe', 'Davina', 'Drinma', 'Imesah', 'Masozi',
        'Nijena', 'Niramour', 'Ondrea', 'Rhialla', 'Valtyra',
        'Yasha Nydoorin', 'Reani',
    ];
    $firstname = array_rand(array_flip($femalenames), 1);
}
$nickname = $firstname;

//----------------------------------------------------------ARRAY JEWEL TONES
$jewelToneEyes = [
    'black Onyx',
    'green Emerald',
    'blue Sapphire',
    'white Diamond',
    'red Ruby',
    "nature’s firework Opal",
    'Pearlescent',
    'black Pearlescent',
    'blue Spinel',
    'blue-green Turqoise',
    'watery gold  Amber',
    'crimson Coral',
    'Pyrite',
    'rose Quartz',
    'blue Quartz',
    'gray-black Hermatite',
    'dark green Malachite',
    'Sardonyx',
    'yellow-golden Zircon',
    'red Zircon',
    'blue-green Zircon',
    'brown, yellow- reddish Jasper',
    'purple Amethyst',
    'transparent fiery orange Jacinth',
];
//jewel-toned eyes, 
//----------------------------------------------------------------Aasimar
$metal = array_rand($metals, 2);
if ($race == 'Aasimar') {
    $metal = array_rand($metals, 2);
    $eyes = array_rand(array_flip($jewelToneEyes), 1) . " toned " . $eyes;
    $hairShine = $hisher . " hair has a " . $metals[$metal[0]] . " 
    shine to it with accents of " . $metals[$metal[1]];

    $divergence = $nickname . " bears the mark of $hisher celestial touch 
    through many different physical features, like " . $hairShine . ". ";
}
//------------------------------------------------------------------Fallen
if ($race == 'Fallen Aasimar') {
    $eyelights = [
        'dark', 'pale muted',
    ];
    $eyelight = array_rand(array_flip($eyelights), 1);

    $eyes = $eyelight . " " . array_rand(array_flip($jewelToneEyes), 1) . " toned " .
        $eyes . ", and dark spots forming under $hisher eyes";

    $hairShines = [
        'black', 'white',
    ];
    $hairwither = array_rand(array_flip($hairShines), 1);
    $hairShine = $hisher . " hair has a " . $metals[$metal[0]] . " 
    shine but withered to " . $hairShine;

    $divergence = $nickname . " bears the mark of $hisher fall 
        through many different physical features, like " . $hairShine .
        " and a very gaunt, almost corpse-like appearance";
}
//----------------------------------------------------------------------------SCRIPT
require_once 'includes/dndraces/human.php'; // call script Human