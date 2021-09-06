<?php

//----------------------------------------------------Trees
$colorings = [
    "lush green",
    "abscissioning brown and yellow leafed",
    "verdant and lavish",
    "dense green",
    "withered brown leafed",
    "ephemeral green",
    "dead",
];

$treestypes = [
    "deciduous",
    "evergreen",
]; // trees

$inYourForests = [
    "fill", "crowd", "pack", "permeate", 
    "shape", "mold", "embody", "build",
];

//----------------------------------------------------Surroundings
$landscaping = [
    "trees cover a hill to the " . $lr . " of you",
    "trees surround a big pit to the " . $lr . " of you",
    "your path crooks left and right between the trees",
    "your path is slowly descending,",
    "your path slopes downhill,",
    "your path is slowly creeping up a hill",
    "trees force you to move left and right",
    "trees create a natural pathway",
];

$odors = [ //-----------------------------------------the forest air
    "is fresh",
    "has a typical odor",
    "smells heavy of pines",
    "is stale",
    "smells dank or moldy",
    "smells of rotting vegetables",
    "is putrid and heavy",
    "has a scent of manure",
    "has a metallic kind of scent",
    "smells like urine",
    "smells sulfurous",
    "is easy and nice to breath",
    "is chilly as it fills your lungs",
    "is pregnant with the scent of flowers",
    "smells very sweet due to berries",
    "seems quite dry",
    "is quite damp",
    "is rather arid",
];


$atmospheres = [ //--------------------------------, while 
    "autumn colors make your surroundings vivid",
    "the trees seem very clustered together",
    "the trees are spread out and make the forest spacious",
    "the trees cast there shadows and make it quite dark",
    "rays of light shine through the tree tops",
    "you see trees you have never seen before",
    "you see through the tree canopy that the sky is packing rain clouds",
    "clouds block the sunlight it becomes darker in the forest",
    "strong winds start to build up more and more",
    "winds make a howling and chiming noise through the woods",
    "brown and dried out leaves dangle on the trees",
];






$visibilities = [ //------------------------------ . Moving forward 
    "your path is clear and straightforward",
    "your path almost seems man made",
    "your path veers $lr",
    "trees guide you to the $lr",
    "your path is difficult to follow trough fallen leaves" . $sc . rand(8, 12).")]",
    "your vision is questionable due to fog for 1d4 [" . rand(1, 4) . "] 
                hours " . $sc . rand(12, 17).")]",
    "you are following a natural line between the trees trough the forest",
    "you're heading deeper into the forest",

];

$obstructions = [ //-------------------------- untill the/your path is
    "barred by a fallen tree $acr".rand(5, 12)."] 
        (On a fail the player stumbles and falls suffering 1d4 [" . rand(1, 4) . "] 
        Bludgeoning Damage)",

    "completely overgrown by vines and roots $dt",
    "covered in heaps of fallen leaves, 
        making it difficult to follow a straight direction" . $sc . rand(8, 12).")]",
    "overgrown with bushes and shrubs, 
        forcing you to find a way around " . $sc . rand(5, 15).")]",
    "covered with moss and grass". $sc . rand(8, 12).")]",
    "climbing a steep hill $dt $exh",
    "a hard rocky bottom" . $sc . rand(4, 10).")]",
    "uneven and difficult with loose sand $dt $exh",
    "soft to walk on due to moss $dt",
    "soft to walk on due to enormous amounts of fallen 
        leaves $dt" . $sc . rand(8, 12).")]",
    "partially washed away by rain making it hard to find good footing"
        . $sc . rand(8, 12).")]",
    "entirely turned into a muddy pool $dt" . $acr . rand(5, 12).")] ",
    "crossed by a small creek through the woods $acr ".rand(5, 12).")] "
        . $sc . "12)]",
    "besieged by musquito’s that sting over and over again, 
            you suffer 1 Piercing Damage",
];








//-----------------------------------------------------DETAILER
$creaturesounds = [
    "howling", "growling",
    "barking", "shrieking",
    "groaning", "yelping",
    "wailing", "roaring",
];
$creaturesound = array_rand(array_flip($creaturesounds), 1);


$details = [//------. Meanwhile
    "you pass a nice hospitable clearing",
    "a couple of trees look dead and petrified",
    "there are trees to left of you, trees to the right, trees everywhere",
    "healthy and green leaves crown the trees",
    "the trees around you have lost all there leaves",
    "many different kinds of trees are in your sight",
    "many trees look like the same kind of tree around here",
    "leaves flow through the air on the wind",
    "a strong gust blows through the forest",
    "gusts of wind shake the trees",
    "gusts of wind pull leaves of the trees",
    "it almost looks like trees are walking and moving around in the distance",
    "you hear the snapping of branches and brushing of trees in the distance",
    "many bugs swirl around you",
    "you pass a tree that seems to be burnt out",
    "some trees seem to be completely hollowed out inside",
    "fairies fly around off in the distance",
    
];


$explorations = [//and
    'the woods give way to a paradise like clearing',
    'an inviting lush green field is between the woods',
    'suddenly the path simply ceased to be',
    'you recognize the trees around you, you seem to be 
        going in circles for the past 1d4 [' . rand(1, 4) . '] hrs',
    'as you pass a familiar looking tree stump you 
        realize you walked in a circle for the past 1d4 [' . rand(1, 4) . '] hrs ',
    "you don’t know how, but you seem to be walking back the way you came for 
        2d20 [" . rand(1, 20) + rand(1, 20) . "] minutes",
    'you suddenly step out in a large mushroom circle',
    "rain breaks through the canopy for 1d4 
        [" . rand(1, 4) . "] hours completely soaking you $exh",
    "snow whirls through the canopy for 1d4 [" . rand(1, 4) . "] hours $exh",
    "after 1d4 [" . rand(1, 4) . "] hours of drizzling rain you are soaked $exh",
    "rays of sunshine fall trough the canopy",
    "you hear the sound of a $creaturesound creature in the distance",
];




//--------------------------------------First Leg
$moving0 = $movements[$moving[0]];
$forward0 = $forwards[$forward[0]];
$forest = array_rand(array_flip($inYourForests), 1);
$trees = array_rand(array_flip($treestypes), 1);
$colored = array_rand(array_flip($colorings), 1);
$atmosphere = array_rand(array_flip($atmospheres), 1);
$smell = array_rand(array_flip($odors), 1);
$landscape = array_rand(array_flip($landscaping), 1);
$notice = array_rand(array_flip($observations), 1);

$entrance = $moving0 ." ". $forward0. " you're entering a forest as 
            $colored $trees trees $forest the area around you. ";
$surroundings = "As $landscape you discern the forest air $smell, 
                while $atmosphere. ";



//--------------------------------------------Second Leg
$obstructed = array_rand(array_flip($obstructions), 1);
$visibility = array_rand(array_flip($visibilities), 1);
$detail = array_rand(array_flip($details), 1);
$explore = array_rand(array_flip($explorations), 1);
$moving1 = $movements[$moving[1]];
$forward1 = $forwards[$forward[1]];
$continue = $moving1 ." ". $forward1. " for 2d4 [" . rand(1,4) + rand(1, 4) . "]
    	    miles $visibility until the path is $obstructed. 
            Meanwhile $detail and $explore.";

$rngforest = $climate.$entrance.$surroundings.$continue;

    /*
    2 shrubs
    3 flowers
    4  petals
    5 bushes
    6 stumps, trunks, branches

    20 ENCOUNTER  d4 1) owl 2) badger 3) giant weasel 4) giant rat
    60 ENCOUNTER 
    80 ENCOUNTER 


    92 
    93 you suddenly step out into a very cozy looking clearing (feywild)

    95  (feywild portals)
    96 

    100 you pass through a feywild barrier and the world around you suddenly looks like a paradise. ENCOUNTER 
    */
