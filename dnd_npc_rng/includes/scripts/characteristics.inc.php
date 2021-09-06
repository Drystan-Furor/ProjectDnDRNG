<?php

/** 
  Characteristics
 */
/*
nose
eyes
chin
lips
*/
// Face Detail Generator
//------------------------------------------------------chin
$chinshapes = [
    'a rather ','quite the','a very defined','a puffed',
    'a very protruding','a bulbous','a very small','a bit of a',
];
$chinshape = array_rand(array_flip($chinshapes), 1);

$chincurves = [
    'pointy','round','square',
];
$chincurve = array_rand(array_flip($chincurves), 1);
$chin = $chinshape." ".$chincurve." chin";

//if beard

//------------------------------------------------------Eyes
$eyeshape = [
    "squinty eyes", "big eyes", "small eyes", "fairly large eyes", "tired eyes",
    "energetic eyes", "drowzy eyes", "round eyes", "almond shaped eyes",
    "wide set eyes", "close set eyes", "prominent eyes", "downturned eyes",
    "upturned eyes", "deep set eyes", "droopy eyes",
    "monolid eyes", "blind eyes",
];
$hasEyes = rand(1, 100);
if ($hasEyes == 1) {
    $eyes = 'empty eye sockets, eyes gauged out';
} else if ($hasEyes >= 2 && $hasEyes <= 10) {
    $blindeye = [
        ", the left eye is blind", ", the right eye is blind",
        ", but both eyes are blind",
    ];
    $eyes = array_rand(array_flip($eyeshape), 1);
    $blindness = array_rand(array_flip($blindeye), 1);
    $eyes = $eyes . $blindness;
} else {
    $eyes = array_rand(array_flip($eyeshape), 1);
}


//--------------------------------------------------------------------mouth Selector 
$mouthshape = [
    "full lips", "round lips", "bow shaped lips", "heavy lower lips",
    "heart shaped lips", "heavy upper lips", "wide lips", "thin lips",
    "downward turned lips", "perfectly proportioned lips",
];
$mouth = array_rand(array_flip($mouthshape), 1);

//------------------- Nose Selector (Based on actual research data for percentages)
$nose = rand(1, 100);
switch ($nose) {
case $nose >= 1 && $nose <= 24:
    $nose = 'a very fleshy, prominent big nose.';
    break;
case $nose >= 25 && $nose <= 38:
    $nose = 'a celestial upturned nose, small in size with a dent at the nose
     bridge and a protruding tip.';
    break;
case $nose >= 39 && $nose <= 47:
    $nose = 'an eagle nose. With a strong sloping curve that
     prominently protrudes from the face.';
    break;
case $nose >= 48 && $nose <= 56:
    $outlines = [
        "subtle", "protruding",
    ];
    $outline = array_rand(array_flip($outlines), 1);
    $nose = 'a bumpy nose that features bumpy outlines with '. $outline .
        ' curves located at the tip of the nose.';
    break;
case $nose >= 57 && $nose <= 64:
    $nose = 'a very snub nose, thin and pointy, small in size but quite round.';
    break;
case $nose >= 65 && $nose <= 68:
    $nose = 'a "Hawk" nose that has similarities with the curved 
    beaks of eagles and other predatory birds. It has a dramatic arched 
    shape and a protruding bridge, making them look long and small.';
    break;
case $nose >= 69 && $nose <= 76:
    $nose = 'a perfectly straight nose. One of the most aesthetically pleasing of 
    all nose shapes. It gives a distinct '.$gender.' and attractive profile since it
     doesn’t have any humps or curves.';
    break;
case $nose >= 77 && $nose <= 84:
    $nose = 'a nubian nose, rather big, with very prominent nostrils.';
    break;
case $nose >= 85 && $nose <= 91:
    $nose = 'a thin and flat shaped nose with a short tip.';
    break;
case $nose >= 92 && $nose <= 100:
    $nose = "a bulbous nose, it has a a swollen, disproportionate nasal tip,
    almost like it's too big. Imagine something like a ball positioned
    at the end of the nose.";
    break;
}


//---------------------------------------------------------------------------- Teeth
$teethTypes = [
    'rotten ','shiny white','yellow','buck','quite large',
    'rather small','yellow and grey','crooked','canine whiskers',
];
$teethType = array_rand(array_flip($teethTypes), 1);
$quality = array_rand(array_flip($qualities), 1);

$metal = array_rand($metals, 2);
$x = rand(0, 6);
$dentalwork = [
    "is missing a tooth","is missing several teeth", 
    "has a ".$metals[$metal[1]]." tooth", 
    "has several ".$metals[$metal[1]]." teeth", 
    "has ".$teethType." teeth", "has no teeth at all",
    "has good dentals", "has yellow teeth, but all there", 
    "has fairly good dentals",
    "has ".$teethType." teeth that could use some bracers", 
    "has no regular teeth but canine whiskers", 
    "has good dentals","has rather bad dentals",
    "has sharp edged teeth, as if they are trimmed or filed",
    "has fake teeth, like a prosthetic made of ".$quality. " "
    .$metals[$metal[1]],
];
$teeth = array_rand(array_flip($dentalwork), 1);