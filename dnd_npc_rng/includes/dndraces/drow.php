<?php

/**
 REDIRECT FROM ELF
 */
// Drow        
//https://forgottenrealms.fandom.com/wiki/Drow_dictionary
$surnames = [
    'Duskryn', "Druu'giir", 'Hunzrin', "Ixit'shii", 'Higure', 'Milithor', "Ignin'rl",
    "T'orgh", ' Despana', 'Symryvvin', 'Ousstyl', 'Godeep', 'Nurbonnis', 'Zolond',
    'Freth', 'Pharn', 'Auvryndar', 'Hekar', 'Maivert', 'Coloara', 'Takandoys', 'Nurindyn',
];
$lastname = array_rand(array_flip($surnames), 1);

if ($gender == 'male') {
    $malenames = [
        'Abban', 'Alur', 'Araj', 'Avinsin', 'Bol', 'Brorn', 'Dobluth', 'Duk-tak', 'Duvall',
        'Elgg', 'Elgghinn', 'Elgg-hor', 'Faern', 'Honglath', 'Jabbuk', "Khal'abbil",
        'Kyorlin', 'Noamuth', 'Ogglin', 'Oloth', 'Parzdiamo', 'Phindar', 'Quarthen',
        'Ragar', 'Ryld', 'Sargtlin', 'Ssinssrigg', 'Thalack', "Uln'hyrr", 'Ultrin',
        'Sargtlin', 'Ultrinnan', 'Veldrin', 'Velkyn', 'Zedrinset', 'Zhaunil', "Z'ress",
    ];
    $firstname = array_rand(array_flip($malenames), 1);
}

if ($gender == 'female') {
    $femalenames = [
        'Abbil', 'Aluve', 'Asanque', 'Belaern', 'Brorna', 'Bwael', 'Crinti', 'Draada',
        'Elamshin', 'Elendar', 'Ilareth', 'Ilhar', 'Ilharess', "Jivvin Quui'elghinn",
        'Malla', 'Mrimm', 'Orthea', 'Plynn', "Qu'uente", "Qu'lith", 'Quarvalsharess',
        'Sarn', 'Sreen', 'Streea', 'Streeaka', 'Ul-Ilindith', 'Ultrine', 'Valsharess',
        'Velve', 'Vidrinath', 'Yathrin', 'Yathtallar',
    ];
    $firstname = array_rand(array_flip($femalenames), 1);
}
$nickname = '<a href="https://forgottenrealms.fandom.com/wiki/Drow_dictionary">'
    . $firstname . '</a>';
$divergence = $nickname . " hails from a dark-skinned sub-race of
     elves that predominantly live in the Underdark";
