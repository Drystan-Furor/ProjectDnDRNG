<?php
/**
HUMAN, Aasimar, Half-Elf
 */

 // Humans, Aasimar, Half Elf
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
//--------------------------------------------------------------------BOOLEANS
if ($raceorigin == "Human" ) {
    $race = $humantype . " Human ";
    $isHalfElf = false;
    $isAasimar = false;
    $divergenceIsSet = false;
}



if ($raceorigin == 'Aasimar') {
    $race = $humantype." ".$race;
    $isHalfElf = false;
    $divergenceIsSet = true;
}

if ($raceorigin == "Half-Elf") {
    $isAasimar = false;
    $divergenceIsSet = true;
    // && $divergenceIsSet == false
}


//-----------------------------------------------------------------Calishite Names:
if ($humantype == "Calishite" && $divergenceIsSet == false) { 
    $divergence = "Shorter and slighter in build than most other humans, 
    Calishites have dusky brown skin, hair, and eyes. 
    They’re found primarily in southwest Faerûn."; 
}

if ($humantype == "Calishite" ) {
    $surnames = [
    'Basha', 'Dumein', 'Jassan', 'Khalid', 'Mostana', 'Pashar', 'Rein',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'Aseir', 'Bardeid', 'Haseid', 'Khemed', 'Mehmen', 'Sudeiman', 'Zasheir',
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }   

    if ($gender == 'female') {
        $femalenames = [
        'Atala', 'Ceidil', 'Hama', 'Jasmal', 'Meilil', 'Seipora', 
        'Yasheira', 'Zasheida', 
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}

//------------------------------------------------------------Chondathan Names:
if ($humantype == "Chondathan" && $divergenceIsSet == false) {
    $divergence = "Chondatans are slender, tawny-skinned folk with brown hair 
    that ranges from almost blond to almost black. Most are tall and have green 
    or brown eyes, but these traits are hardly universal. Humans of Chondathan 
    descent dominate the central lands of Faerûn, around the Inner Sea.";
}

if ($humantype == "Chondathan" || $humantype == "Tethyrian" ) {
    $surnames = [
     'Amblecrown', 'Buckman', 'Dundragon', 'Evenwood', 'Greycastle', 'Tallstag',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'Darvin', 'Dorn', 'Evendur', 'Gorstag', 'Grim', 
        'Helm', 'Malark', 'Morn', 'Randal', 'Stedd', 
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }     

    if ($gender == 'female') {
        $femalenames = [
        'Arveene', 'Esvele', 'Jhessail', 'Kerri', 
        'Lureene', 'Miri', 'Rowan', 'Shandri', 'Tessele',
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}

//--------------------------------------------------------------------- Damaran
if ($humantype == "Damaran" && $divergenceIsSet == false) {
    $divergence = "Found primarily in the northwest of Faerûn, Damarans
        are of moderate height and build, with skin hues ranging from tawny 
        to fair. Their hair is usually brown or black, and their eye color 
        varies widely, though brown is most common.";
}
if ($humantype == "Damaran") {
    $surnames = [
    'Bersk', 'Chernin', 'Dotsk', 'Kulenov', 'Marsk', 'Nemetsk', 
    'Shemov', 'Starag',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'Bor', 'Fodel', 'Glar', 'Grigor', 'Igan', 'Ivor', 
        'Kosef', 'Mival', 'Orel', 'Pavel', 'Sergor', 
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }
        
    if ($gender == 'female') {
        $femalenames = [
        'Alethra', 'Kara', 'Katernin', 'Mara', 
        'Natali', 'Olma', 'Tana', 'Zora', 
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}

//----------------------------------------------------------------Illuskan Names: 
if ($humantype == "Illuskan" && $divergenceIsSet == false) {
    $divergence = "Illuskans are tall, fair-skinned folk with blue or 
    steely gray eyes. Most have raven-black hair, but those who inhabit 
    the extreme northwest have blond, red, or light brown hair.";
}
if ($humantype == "Illuskan") {
    $surnames = [
    'Brightwood', 'Helder', 'Hornraven', 'Lackman', 
    'Stormwind', 'Windrivver',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'Ander', 'Blath', 'Bran', 'Frath', 'Geth', 'Lander', 
        'Luth', 'Malcer', 'Stor', 'Taman', 'Urth',
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }
        
    if ($gender == 'female') {
        $femalenames = [
        'Amafrey', 'Betha', 'Cefrey', 'Kethra', 'Mara', 
        'Olga', 'Silifrey', 'Westra',
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}

//------------------------------------------------------------------Mulan Names: 
if ($humantype == "Mulan" && $divergenceIsSet == false) {
    $divergence = "Dominant in the eastern and southeastern shores of 
    the Inner Sea, the Mulan are generally tall, slim, and amber-skinned, 
    with eyes of hazel or brown. Their hair ranges from black to dark brown, 
    but in the lands where the Mulan are most prominent, nobles and many 
    other Mulan shave off all their hair.";
}
if ($humantype == "Mulan") {
    $surnames = [
    'Ankhalab', 'Anskuld', 'Fezim', 'Hahpet', 'Nathandem', 
    'Sepret', 'Uuthrakt',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'Aoth', 'Bareris', 'Ehput-Ki', 'Kethoth', 'Mumed', 
        'Ramas', 'So-Kehur', 'Thazar-De', 'Urhur', 
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }
        
    if ($gender == 'female') {
        $femalenames = [
        'Arizima', 'Chathi', 'Nephis', 'Nulara', 'Murithi', 
        'Sefris', 'Thola', 'Umara', 'Zolis',
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}

//--------------------------------------------------------------------Rashemi Names: 
if ($humantype == "Rashemi" && $divergenceIsSet == false) {
    $divergence = "Most often found east of the Inner Sea and often 
    intermingled with the Mulan, Rashemis tend to be short, stout, and muscular. 
    They usually have dusky skin, dark eyes, and thick black hair.";
}
if ($humantype == "Rashemi") {
    $surnames = [
    'Chergoba', 'Dyernina', 'Iltazyara', 'Murnyethara', 
    'Stayanoga', 'Ulmokina',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'Borivik', 'Faurgar', 'Jandar', 'Kanithar', 'Madislak', 
        'Ralmevik', 'Shaumar', 'Vladislak',
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }
        
    if ($gender == 'female') {
        $femalenames = [
        'Fyevarra', 'Hulmarra', 'Immith', 'Imzel', 'Navarra', 
        'Shevarra', 'Tammith', 'Yuldra',
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}

//----------------------------------------------------------------------------Shou
if ($humantype == "Shou" && $divergenceIsSet == false) {
    $divergence = "The Shou are the most numerous and powerful ethnic 
        group in Kara-Tur, far to the east of Faerûn. They are yellowish-bronze in 
        hue, with black hair and dark eyes. Shou surnames are usually presented 
        before the given name.";
}
if ($humantype == "Shou") {
    $surnames = [
    'Chien', 'Huang', 'Kao', 'Kung', 'Lao', 'Ling', 'Mei', 'Pin', 
    'Shin', 'Sum', 'Tan', 'Wan',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'An', 'Chen', 'Chi', 'Fai', 'Jiang', 'Jun', 'Lian', 
        'Long', 'Meng', 'On', 'Shan', 'Shui', 'Wen',
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }
        
    if ($gender == 'female') {
        $femalenames = [
        'Bai', 'Chao', 'Jia', 'Lei', 'Mei', 'Qiao', 'Shui', 'Tai',
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}

//----------------------------------------------------------------------------Tethyrian
if ($humantype == "Tethyrian" && $divergenceIsSet == false) {
    $divergence = "Widespread along the entire Sword Coast at the 
        western edge of Faerûn, Tethyrians are of medium build and height, 
        with dusky skin that tends to grow fairer the farther north they dwell. 
        Their hair and eye color varies widely, but brown hair and blue eyes are 
        the most common. ";
    // Tethyrians primarily use Chondathan names.
} 

//--------------------------------------------------------------------Turami Names: 
if ($humantype =="Turami" && $divergenceIsSet == false) {
    $divergence = "Native to the southern shore of the Inner Sea, 
        the Turami people are generally tall and muscular,
        with dark mahogany skin, curly black hair, and dark eyes.";
}
if ($humantype =="Turami") {
    $surnames = [
    'Agosto', 'Astorio', 'Calabra', 'Domine', 'Falone', 
    'Marivaldi', 'Pisacar', 'Ramondo',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'Anton', 'Diero', 'Marcon', 'Pieron', 'Rimardo', 
        'Romero', 'Salazar', 'Umbero',
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }
        
    if ($gender == 'female') {
        $femalenames = [
        'Balama', 'Dona', 'Faila', 'Jalana', 'Luisa', 
        'Marta', 'Quara', 'Selise', 'Vonda',
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}
//------------------------------------------------------------NICKNAME
if ($raceorigin == 'Aasimar') {
    $firstname = $nickname;
}
$nickname = $firstname;