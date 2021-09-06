<?php

$leftrights = [
    "left", "right",
];
$lr = array_rand(array_flip($leftrights), 1);

//------------------------------survival
$dt = "[Difficult Terrain: Movement is halved]";
$exh = "[Gain one level of Exhaustion]";

//----------------------ability checks
$st = "Saving Throw";
$sc = " [Survival check to find a path (DC "; //.rand(5, 12)."]";
$acr = " [Acrobatics / Athletics check to best the hurdle (DC ";//.rand(5, 12)."]";
$cs = "[Constitution Saving Throw (DC "; //rand(1,20) ];
$wiper = "Wisdom (Perception)";
$intin =  "Intelligence (Investigation)";

$con = 'Constitution';
$wis = 'Wisdom';

//-------------------------general
$ar = "Attack Roll";

$adv = "Advantage";
$dav = "Disadvantage";

$res = "resistance";
$imm = "immunity";

$rwe = "Ranged Weapon";

//----------------------------HTML-------------------------------------


$observations = [
    'see', 'notice', 'observe', 'spot',
    'distinguish', 'discern',
    'mark', 'catch sight', 'make out',
];
//$observe = array_rand($observations, 3);

$movements = [
    "Proceeding", "Venturing", "Moving","Traversing",
    "Going", "Progressing", "Walking", "Advancing", 
];
$moving = array_rand($movements, 4);

$forwards = [
    "forward", "ahead", "along", "onward", "forth",
];
$forward = array_rand($forwards, 4);
//$movements[$moving[0]] 
//$forwards[$forward[0]]
// 0-3

