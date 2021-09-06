<?php
 /** 
  Race
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
$dndrace = array_rand(array_flip($dndraces), 1);//random


//random origin selector used on NAMES.inc
//------------------------------------------------------origin
$randomorigin = array_rand(array_flip($dndraces), 1);
while ($randomorigin == "Genasi" 
    || $randomorigin == "Yuan-Ti Pureblood"
    || $randomorigin == "Simic Hybrid"
    ) {
    $randomorigin = array_rand(array_flip($dndraces), 1);
}

//------------------------------------------------------homebrew
// localrace variable is readline on page, allows Homebrew
if (array_key_exists('setcommonrace', $_POST)) {
    if (!$_POST['commonrace'] == "" || ((bool)$_POST['commonrace'] !== null)) {
        htmlspecialchars($_POST['commonrace']);
        $race = $_POST['commonrace'];
        $raceorigin = $race;
        if (!in_array($race, $dndraces)) {
            $homebrew = true;
            $raceorigin = $randomorigin;
            echo "HOMEBREW";
        } else {
            $race = $_POST['commonrace'];
            $raceorigin = $race;
            $homebrew = false;
        }
    }
}
if (!array_key_exists('commonrace', $_POST) 
    || $_POST['commonrace'] == "" 
    || ((bool)$_POST['commonrace'] == null)
) {
    $_POST['commonrace'] = $dndrace;
    $race = $_POST['commonrace'];
    $raceorigin = $race;
    $homebrew = false;
}



    //------------------------------------------------------if race has sub-class
    // Dragonborn && Kobolds $ancestry." ".$color
    if ($raceorigin == "Dragonborn" || $raceorigin == "Kobold") {
        $ancestries = [
            'Chromatic','Gem','Metallic',
        ];
        $ancestry = array_rand(array_flip($ancestries), 1);

        if ($ancestry == 'Chromatic') {
            $chromatics =[
            'Black','Blue','Green','Red','White',
            ];
            $color = array_rand(array_flip($chromatics), 1);
        }
        if ($ancestry == 'Gem') {
            $gems = [
                'Amethyst','Crystal','Esmerald','Sapphire','Topaz',
            ];
            $color = array_rand(array_flip($gems), 1);
        }
        if ($ancestry == 'Metallic') {
            $metals = [
                'Brass','Bronze','Copper','Gold','Silver',
            ];
            $color = array_rand(array_flip($metals), 1);
        }
    }
        
    // Elves
    if ($raceorigin == 'Elf') {
        $elfraces = [
        "High Elf", "Wood Elf", "Eladrin Elf","Drow",'Half-Elf',
        ];
        $race = array_rand(array_flip($elfraces), 1);
    
        if ($race == 'Drow') {
            $raceorigin = 'Drow';
        }
    }

    // Half-Elf
    $isHalfElf = false;
    if ($race == 'Half-Elf') {
        $age = rand(14, 180);
        $namingConvention = rand(1, 2);
        if ($namingConvention == 1) {
            $isHalfElf = true;
        } else {
            $isHalfElf = "Human Half-Elf";
        }
    }

    // Humans
    if ($raceorigin == "Human" || $raceorigin == "Aasimar" || $isHalfElf == "Human Half-Elf") {
        $humanraces = [
        "Calishite",
        "Chondathan",
        "Damaran",
        "Illuskan",
        "Mulan",
        "Rashemi",
        "Shou",
        "Tethyrian",
        "Turami",
        ];
        $humantype = array_rand(array_flip($humanraces), 1);

        if ($raceorigin == "Human" ) {
            $race = $humantype . " Human ";
        }
        if ($isHalfElf == "Human Half-Elf") {
            $race = $humantype . " Half-Elf ";
        }
    }
    
    // Aasimar
    $isAasimar = false;
    if ($raceorigin == "Aasimar") {
        $isAasimar = true;
        $isFallen = rand(1, 20);
        if ($isFallen > 14) {
            $race = "Fallen Aasimar";
        }      
    }

    //Orc 
    if ($race == 'Orc' || $race == "Orc of Exandria" || $race == "Orc of Ebberon") {
        $raceorigin = 'Orc';
    }

    //Halfling
    if ($race == 'Halfling') {
        $halflingraces = [
        "Lightfoot Halfling", "Stout Halfling",
        ];
        $race = array_rand(array_flip($halflingraces), 1);
    }

    //Gnome
    if ($race == 'Gnome') {
        $gnomeraces = [
            "Forest Gnome", "Rock Gnome", "Deep Gnome",
            ];
            $race = array_rand(array_flip($gnomeraces), 1);
        if ($race == "Deep Gnome") {
            $age = rand(14, 250);
        }
    }

    // Loxodon 
    if ($race == 'Loxodon') {
        $loxodonRaces = [
            'Ravnica Loxodon', 'Mirrodin Loxodon','Tarkir Loxodon',
        ];
        $race = array_rand(array_flip($loxodonRaces), 1);
    }
        
    // Gith
    $randomGithName = 0;
    if ($race == 'Gith') {
        $isNeitherGith = false;
        $githraces = [
        'Githyanki', 'Githzerai', 
        ];
        $race = array_rand(array_flip($githraces), 1);
        $isGithvyrik = rand(1, 20);
        if ($isGithvyrik == 20) {
            $race = 'Githvyrik';
            $isNeitherGith = true;
            $randomGithName = rand(1, 2);
        }
    }
    
    //Genasi
    $isGenasi = false;
    if ($race == 'Genasi') {
        $isGenasi = true;
        $genasiraces = [
        "Fire Genasi","Air Genasi","Earth Genasi","Water Genasi",
        ];
        $race = array_rand(array_flip($genasiraces), 1);
        $raceorigin = $randomorigin;
    }

    // Firblog
    $isFirbolg = false;
    if ($raceorigin == "Firbolg") {
        $isFirbolg = true;
    }

    // Warforged
    $robot = false;
    if ($raceorigin == "Warforged") {
        $robot = true;
    }

    // Simic Hybrid
    if ($race == "Simic Hybrid") {
        $randomorigins = [
            "Human","Elf","Vedalkan",
        ];
        $raceorigin = array_rand(array_flip($randomorigins), 1);
        if ($raceorigin == "Human") {
            $humanraces = [
                "Calishite",
                "Chondathan",
                "Damaran",
                "Illuskan",
                "Mulan",
                "Rashemi",
                "Shou",
                "Tethyrian",
                "Turami",
                ];
                $humantype = array_rand(array_flip($humanraces), 1);
        }

        if ($age > 30) {
            $age /= 2;
        }
        if ($age < 15) {
            $age += 3;
        }
        $age = ceil($age);
    }
