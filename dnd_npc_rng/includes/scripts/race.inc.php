<?php

/** 
  Race
  vars:     $dndrace        [string]    [array]
            $race           [string]    [var] FROM {input} OR {random}
            $raceorigin     [string]    [==$dndrace]
            $randomorigin   [string]    [array] NOT [!= all dndraces]
            $homebrew       [BOLEAN]    [true] IF [$race != in array]
 */
// Race RNG  
//----------------------------------------------------dndraces array
$dndraces = [
    "Dragonborn", "Dwarf", "Elf", "Gnome", "Half-Elf", "Halfling",
    "Half Orc", "Human", "Tiefling", "Orc of Exandria", "Leonin",
    "Satyr", "Aarakocra", "Genasi", "Goliath", "Aasimar", "Bugbear",
    "Firbolg", "Goblin", "Hobgoblin", "Kenku", "Kobold", "Lizardfolk",
    "Orc", "Tabaxi", "Triton", "Yuan-Ti Pureblood", "Feral Tiefling",
    "Tortle", "Khalastar", "Changeling", "Orc of Eberron", "Shifter",
    "Warforged", "Gith", "Centaur", "Loxodon", "Minotaur",
    "Simic Hybrid", "Vedalkan", "Verdan", "Locathah", "Owlfolk",
    "Rabbitfolk",
];
$dndrace = array_rand(array_flip($dndraces), 1); //random
$raceorigin = $dndrace;


//------------------------------------------------------origin
//random origin selector used on NAMES.inc
$randomorigin = array_rand(array_flip($dndraces), 1);
while (
    $randomorigin == "Genasi"
    || $randomorigin == "Yuan-Ti Pureblood"
    || $randomorigin == "Simic Hybrid"
) {
    $randomorigin = array_rand(array_flip($dndraces), 1);
}

//------------------------------------------------------homebrew
// localrace variable is readline on page, allows Homebrew
if (array_key_exists('setcommonrace', $_POST)
    && !$_POST['commonrace'] == ""
    && !ctype_space($_POST['commonrace'])
    && !((bool)$_POST['commonrace'] == null)
) {
    $race = (htmlspecialchars($_POST['commonrace']));
    $race = ucwords(strtolower($race)); //-------------------All OF The Words (Caps)
    $race = ucfirst(str_replace("Of", "of", $race)); //--Not All of The Words
    $race = ucfirst(str_replace("The", "the", $race)); //Not All of the Words
    $race = ucfirst(str_replace("-ti", "-Ti", $race)); //Not All of the Words
    if ($race == "Drow") {
        $dndraces[] = "Drow";
    }
    $dndrace = $race;
    $raceorigin = $race;

    if (!in_array($race, $dndraces) ) { //determine homebrew based on entry
        $homebrew = true;
        $dndrace = $randomorigin;
    } else {
        $homebrew = false;
    }
}               // && $race != 'Drow'

//--------------------------------------------------------FORM DEFAULTER
if (!array_key_exists('commonrace', $_POST)
    || $_POST['commonrace'] == ""
    || ctype_space($_POST['commonrace'])
    || ((bool)$_POST['commonrace'] == null)
) {
    $_POST['commonrace'] = $dndrace;
    $race = $_POST['commonrace'];
    $raceorigin = $race;
    $homebrew = false;
}







//------------------------------------------------name vars to determine
$firstname = "Ernest";
$nickname = "Gary";
$lastname = "Gygax";
$divergence = "$firstname $nickname $lastname was an American game designer 
and author best known for co-creating the pioneering role-playing game 
 Dungeons & Dragons (D&D) with Dave Arneson.";

//----------------------------------------------------SCRIPT CALLER
require 'includes/scripts/age.inc.php'; // age script USES race.inc

if ($dndrace == "Genasi" || $race == "Genasi" || $homebrew == true) {
    include_once 'includes/dndraces/' . $randomorigin . '.php'; // call script
}

if ($homebrew == false) {
    foreach ($dndraces as $chosenRace) {
        if ($chosenRace == $race) {
            $raceName = $race;
            $raceName = strtolower($raceName);              //no caps's in filename
            $raceName = str_replace(' ', '', $raceName);    //no spaces in filename
            $raceName = str_replace('-', '', $raceName);    //no dashes in filename
            include_once 'includes/dndraces/' . $raceName . '.php'; // call script
        }
    }
}