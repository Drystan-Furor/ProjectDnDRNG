<?php
/*

    Bugbear names are guttural and range from short to long.  
    Unfortunately there are no known female bugbear names. 
    Since bugbears speak Goblin (and Common), 
    you could use goblin names as well for more inspiration.

    */

$surnames = [
    'Khitran', 'Ghugrir', 'Vadumkk', 'Brimkk', 'Tudrolk', 'Rograth',
    'Rordonn', 'Vith', 'Chrilk', 'Tharr', 'Ghogran', 'Stamkk', 'Zhonn',
    'Ghurdolk', 'Stun', 'Hrodoth', 'Zirk', 'Stath', 'Bromkk', 'Rizzon',
];
$lastname = array_rand(array_flip($surnames), 1);

if ($gender == 'male') {
    $malenames = [
        'Driekol', 'Greerkilx', 'Brabtygz', 'Glevzaagz', 'Lognerk', 'Xasb',
        'Jykeegs', 'Craang', 'Krart', 'Xat', 'Oz', 'Creld', 'Sriogz', 'Fiolx',
    ];
    $firstname = array_rand(array_flip($malenames), 1);
}

if ($gender == 'female') {
    $femalenames = [
        'Kuqi', 'Enxa', 'Flihisz', 'Depolm', 'Nunoilee', 'Noxea', 'Frez',
        'Qeassa', 'Olk', 'Eagansa', 'Srokkaax', 'Gralbianq', 'Hoq',
        'Gnaalsia', 'Pryhxa',
    ];
    $firstname = array_rand(array_flip($femalenames), 1);
}
$nickname = $lastname;
$divergence = $race . "s are hairy goblinoids born for battle and mayhem. 
        They survive by raiding and hunting, but are fond of setting ambushes 
        and fleeing when outmatched.";
