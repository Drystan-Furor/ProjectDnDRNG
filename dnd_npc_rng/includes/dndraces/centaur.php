<?php
//centaur
$surnames1 = [
    'Autumn', 'Pine', 'Timber', 'Crater', 'Hazel', 'Aspen', 'Drift', 'Bright', 
    'Forest','Rock', 'Oaken', 'Creek','River',
    'Willow', 'Earthen', 'Flood', 'Fall', 'Snow', 'Green', 'Ridge', 'Winter', 
    'Hill', 'Storm', 'Brown', 'Red', 'Moss',
];
$lastname1 = array_rand(array_flip($surnames1), 1);
$surnames2 = [
    'sleep', 'chaser', 'watcher', 'shifter', 'scorn', 'fighter', 'chanter', 
    'braider',
    'binder', 'seeker', 'bringer', 'rusher', 'strength',
    'tree', 'hoof', 'blade', 'darter', 'twister', 'hold', 'smirk', 'watch',
    'petals', 'charger', 'borne', 'prowler', 'reign',
];
$lastname2 = array_rand(array_flip($surnames2), 1);
$lastname = $lastname1 . $lastname2;

if ($gender == 'male') {
    $malenames = [
        'Thond', 'Dezreva', 'Jelveth', 'Vigrid', "Thoz'ren", 'Rhoklund',
        'Vrannul', "Tos'zid", 'Ghalrevol', "Thez'had", 'Dwaildir',
        'Vokrih', 'Gird', 'Rhin', 'Dor',
    ];
    $firstname = array_rand(array_flip($malenames), 1);
}

if ($gender == 'female') {
    $femalenames = [
        'Bydran', 'Zifrin', 'Phazirin', 'Dyzlet', 'Zefnael', 'Vyfnozen', 'Lalthag',
        'Phaflet', 'Lilraeh', 'Vinroh', 'Lizhan',
        'Fydath', 'Shegevan', 'Phorlosh', 'Nograr', 'Melrat', 'Phazren', 'Horzer',
    ];
    $firstname = array_rand(array_flip($femalenames), 1);
}
$divergence = "Roamers at heart, $race love open spaces and the freedom 
         to travel. As much as they can, " . $race . "s run. They race the wind,
          hooves thundering and tails streaming behind them.";
$nickname = $firstname;

//------------------------------------------------------------HOOVES
$hooves = [
    'one-toed',
    'two-toed',
    'deer',
    'moose',
    'elk',
    'horse',
    'cow',
    'cloven',
];

$shapes = [
    'club','aligned','long toe low heel','migrated',
    'negative palmar','laminitic','founder',
];

$hiLows = [
    'high','low',
];


$hoof = array_rand(array_flip($hooves), 1);
$shape =  array_rand(array_flip($shapes), 1);
$hiLow = array_rand(array_flip($hiLows), 1);


$shoe = "$hiLow, $shape $hoof hooves";