<?php

$elvenarchitects = [
    "High Elves", "Wood Elves", "Eladrin Elves", "Drow Elves",
];
$architectrace = array_rand(array_flip($elvenarchitects), 1);

$alignments = [
    'an evil', 'a good', 'a neutral',
];
$aligned = array_rand(array_flip($alignments), 1);

$elementals = [
    'Air', 'Earth', 'Fire', 'Water',
];
$element = array_rand(array_flip($elementals), 1);

$cultsANDgroups = [
    'a Demon-worshiping cult',
    'a Devil-worshiping cult',
    'an Elemental ' . $element . ' cult',
    'Worshippers of ' . $aligned . ' deity',
];
$cANDg = array_rand(array_flip($cultsANDgroups), 1);

$newNPCAlignment = randAlignment();
$npcClass = array_rand(array_flip($npcClasses), 1);
$humanAlignClass = $newNPCAlignment . $npcClass;

$creators = [ //created by
    'a Beholder',
    "$cANDg", 
    'Dwarves', "$architectrace ", 'Giants', 'Hobgoblins', 
    "$humanAlignClass's", 'Kuo-toa', 'a Lich', 'Mind flayers', 'Yuan-ti', 
    //'nature <i>[No Creator] (natural caverns)</i>', 
];
