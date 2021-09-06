<?php

/**
 String Concat and Results Printer
 */


if ($homebrew == true) {
    $homebrewed = "HOMEBREW";
} else {
    $homebrewed = "";
}



//-------------------------------------------------------subject array
$randsubject = [
    " the  $race",
    " this $thisGender",
    " $heshe",
    " $nickname",
];
$subject = array_rand(array_flip($randsubject), 1);
//----------------------------------------------------------VARS from array's
$see = array_rand($observations, 4);
//$indicates = array_rand(array_flip($indicators), 1);


/** 
//---------------------------------------------SCARS from array's // prepare 3 scars
 */
$scarline = array_rand($scarlines, 3);          //a diagonal scratch
$scarside = array_rand($scarsides, 3);          //on the left
$scarlocation = array_rand($scarlocations, 3);  //cheeck
$observe = array_rand($observations, 3);        //see it
for ($i = 0; $i < 3; $i++) {                    //build [3]
    $scar[$i] = "You " . $observations[$observe[$i]] . " " . $heshe . " has a " .
        $scarlines[$scarline[$i]] . " on the " .
        $scarsides[$scarside[$i]] . " of $hisher " .
        $scarlocations[$scarlocation[$i]] . ". ";
}

// ---------------------------------------------------has scars? how many?
// ---------------------------------------------------has scar D2 = 50/50 chance
$hasScar = rand(1, 2);
if ($hasScar == 1) {
    $scarface = rand(1, 3);
    switch ($scarface) {
        case 1:
            $blemishes = $scar[0];                          // 1
            break;
        case 2:
            $blemishes = $scar[0] . $scar[1];               // 1 + 2
            break;
        case 3:
            $blemishes = $scar[0] . $scar[1] . $scar[2];    // 1 + 2 + 3
            break;
    }
} else {
    $blemishes = "";    //empty string
}






//-------------------------------------------------------------------string concat


$nameofthisNPC =  "You meet " . $firstname . " " . $lastname . ". ";    //-------NAME
// return from scriptcaller race


//--BODY GENDEER AGE WEALTH DIVERGENCE
$genraceage = "A " . $bodysize . " $gender $race thats about
                $age years old, $wealth " . $divergence;
// return from scriptcaller race/ age/ bodydetails/ names/ wardrobe


//----------------------------------------------------------------facial construction
$face =  " You " . $observations[$see[0]] .                   //see nose, eyes
    " this $thisGender has $nose                        
The $race meets your gaze with $eyes.             
As you seize up the $thisGender, you " .
    $observations[$see[1]] . " $heshe has $chin" .            //see chin
    " and $hisher mouth is set with " . $mouth . ". ";        //see mouth

$dentals = "When the $race is talking or shouting, you "
    . $observations[$see[2]] . " $heshe $teeth. ";            //see teeth

//--------------------------------------------------------------see scars

$body = " Built " . $bodytype . ", " . "$heshe has a $gender " .
    "body with " . $bodyshape . ". ";                         //see body
//--------------------------------------------------------------see outfit
$profile = $nickname . " seems to be in a " . $mood . " mood. ";
//--------------------------------------------------------------see mood

$holdweapon = "You also " . $observations[$see[3]] . " " . $subject .
    " " . $holding . " a " . $weapon . ". ";                  //see weapon


//------------------------------------------------------------------- print results
$randomizednpcresult = $nameofthisNPC . $genraceage . $face . $dentals .
    $blemishes . $body . $outfit . $profile . $holdweapon . PHP_EOL;

/** 
 counter of website visits
 counter of ## rng's created 
 foolproof form ??


 beards??? array, random, assign to dwarves. perhaps others?
 or beard / chin, if not beard chin = ""; otherwise NO chin but beard.
 */
