<?php

/**
 Weather Block DMG. 109
 */


//--------------------------------Temperatures------
$temperatures = rand(1, 20);
$cold = false;
$heat = false;
$regulartemp = "[if it's between 32-86 Fahrenheit (0 - 30 degrees Celsius)]";
$extremecold = "[if it's 32 - -8 Fahrenheit (0 - -22 degrees Celsius) or lower]";
$extremeheat = "[if it's 86 Fahrenheit (30 degrees Celsius) or hotter]";
$weatherEffect = "";

if ($temperatures <= 14) {
    $temperature = "normal for the season. ";
} else if ($temperatures >= 15 && $temperatures <= 17) {
    $d4times10 = rand(1, 4) * 10;
    $temperature = $d4times10 . " degrees Fahrenheit colder then normal. ";
    $cold = true;
} else if ($temperatures >= 18) {
    $d4times10 = rand(1, 4) * 10;
    $temperature = $d4times10 . " degrees Fahrenheit hotter then normal. ";
    $heat = true;
}

if ($cold == true) {
    $weatherEffect = $cs . "10)] or $exh. 
    (This does not apply if a creature has $res or $imm
    to cold damage, wears cold weather gear, or is adapted to cold climates). ";
}

if ($heat == true) {
    $weatherEffect = "If creatures are exposed to the heat and have no access to 
    drinkable water they must succeed on $cs 5)] each hour. 
    The DC is 5 for the first hour and increases by 1 each additional hour. 
    Creatures in medium or heavy armor, or heavy clothing have " . $dav . "
    on the $st.
    Creatures with $res or $imm to fire damage or adapted to the climate 
    automatically succeed on the $st . ";
}

//-----------------------------------------clouds
$dryweathers = [// The clouds look like 
    'they are abscent in the clear blue sky. ', 
    'delicate, feathery clouds. ',
    'thin, white clouds that cover the whole sky like a veil. ',
    'thin, sometimes patchy, sheet-like clouds. ',
    'fluffy, white cotton balls in the sky. ',
    'thin, white sheets covering the whole sky. ',
    'huge mountains or towers from far away. ',
    'patchy gray and white with often a dark appearance. ',
];
$dryweather = array_rand(array_flip($dryweathers), 1);
$cloudysky = "The clouds look like $dryweather"; 

//----------------------------------------Wind 
//d20
$winds = rand(1, 20);
if ($winds <= 12) {
    $wind = "It's practically windstill. ";
    $windeffect = "";
} else if ($winds > 12 && $winds <= 17) {
    $wind = "There is a light breeze. ";
    $windeffect = "";
} else if ($winds >= 18) {
    $wind = "Strong winds are billowing. ";
    $windeffect = "$dav on $rwe $ar" . "s and on $wiper checks that rely on hearing. 
        Fog is dispersed, open flames extinghuised, and non-magical flying is near 
        impossible, a flying creature must land at the end of it's turn or fall. ";
}

//----------------------------- Precipitation 
//d20
$precipitations = rand(1, 20);
if ($precipitations <= 12) {//"None";
    $precipitation = "At least it's dry for now. ";
    $precEffect = '';
} else if ($precipitations >= 13 && $precipitations <= 17) {
    //"Light rain or light snowfall";
    $lightprecipitations = [
        'light rain', 'light snow',
    ];
    $lightprecipitation = array_rand(array_flip($lightprecipitations), 1);
    $precipitation = "Unfortunately a $lightprecipitation has begun to fall. "; 
    $precEffect = 'It makes your sight a bit blurry in the distance. 
            [-2 Passive Perception when relying on seeing] ';
} else if ($precipitations >= 18) {//"Heavy rain or heavy snowfall";
    
    $heavyprecipitations = [
        'heavy rain', 'heavy snow',
    ];
    $heavyprecipitations = array_rand(array_flip($heavyprecipitations), 1);
    $precipitation = "Regrettably $heavyprecipitations is beating down on you. "; 
    $precEffect = 'The weather makes your surroundings lightly obscured. 
            [-5 Passive Perception when relying on seeing]
            ['.$dav.' on '.$wiper.'] ';
}

$climate = "The temperature is ". $temperature . $weatherEffect . 
            $cloudysky . $wind . $windeffect . 
            $precipitation . $precEffect;