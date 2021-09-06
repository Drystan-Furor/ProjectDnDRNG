<?php
//Dragonborn
// Dragonborn && Kobolds $ancestry." ".$color
$ancestries = [
    'Chromatic', 'Gem', 'Metallic',
];
$ancestry = array_rand(array_flip($ancestries), 1);

if ($ancestry == 'Chromatic') {
    $chromatics = [
        'Black', 'Blue', 'Green', 'Red', 'White',
    ];
    $color = array_rand(array_flip($chromatics), 1);
}
if ($ancestry == 'Gem') {
    $gems = [
        'Amethyst', 'Crystal', 'Esmerald', 'Sapphire', 'Topaz',
    ];
    $color = array_rand(array_flip($gems), 1);
}
if ($ancestry == 'Metallic') {
    $metals = [
        'Brass', 'Bronze', 'Copper', 'Gold', 'Silver',
    ];
    $color = array_rand(array_flip($metals), 1);
}



$dragonbornMaleNames = [
    'Arjhan', 'Balasar', 'Bharash', 'Donaar', 'Ghesh', 'Heskan', 'Kriv',
    'Medrash', 'Mehen', 'Nadarr', 'Pandjed', 'Patrin', 'Rhogar', 'Shamash',
    'Shedinn', 'Tarhun', 'Torinn',
];
$dragonbornFemaleNames = [
    'Akra', 'Biri', 'Daar', 'Farideh', 'Harann', 'Havilar', 'Jheri',
    'Kava', 'Korinn', 'Mishann', 'Nala', 'Perra', 'Raiann', 'Sora',
    'Surina', 'Thava', 'Uadjit',
];

$dragonbornClanNames = [
    'Clethtinthiallor', 'Daardendrian', 'Delmirev', 'Drachedandion',
    'Fenkenkabradon', 'Kepeshkmolik', 'Kerrhylon', 'Kimbatuul',
    'Linxakasendalor', 'Myastan', 'Nemmonis', 'Norixius', 'Ophinshtalajiir',
    'Prexijandilin', 'Shestendeliath', 'Turnuroth', 'Verthisathurgiesh',
    'Yarjerit',
];

if ($gender == 'male') {
    $firstname = array_rand(array_flip($dragonbornMaleNames), 1);
    $lastname = array_rand(array_flip($dragonbornClanNames), 1);
}
if ($gender == 'female') {
    $firstname = array_rand(array_flip($dragonbornFemaleNames), 1);
    $lastname = array_rand(array_flip($dragonbornClanNames), 1);
}
$nickname = $firstname;
$divergence = "Dragonborn look very much like dragons standing erect 
    in humanoid form, though they lack wings or a tail. The clans ancestry 
    gives this $race a " . $ancestry . " " . $color . " scale color.";
