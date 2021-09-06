<?php

/**
  Scars
 */

// Scar Tissue Arrays
//------------------------------------------------------SCAR
$markings = [
    'scar', 'cut', 'bruise', 'laceration', 'graze', 'claw mark',
    'birth mark', 'wound', 'jab', 'bruise', 'scratch',
];
$mark = array_rand($markings, 5);

//------------------------------------------------------a DIAGONAL scar
$scarlines = [
    "horizontal " . $markings[$mark[0]],
    "vertical " . $markings[$mark[1]],
    $markings[$mark[2]],
    "diagonal " . $markings[$mark[3]] . ", from the left to the right",
    "diagonal " . $markings[$mark[4]] . ", from the right to the left",
];

//------------------------------------------------on the LEFT SIDE
$scarsides = [
    "left side", "right side", "middle",
];

//-------------------------------------------------of the RIGHT EYE
$scarlocations = [
    "left cheek",   "right cheeck",
    "left temple",  "right temple",
    "left eye",     "right eye",
    "left ear",     "right ear",
    "left eyebrow", "right eyebrow",
    "jaw", "forehead", "chin",
    "nose", "mouth", "throat",
];