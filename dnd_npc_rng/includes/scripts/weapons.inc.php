<?php
/**
  Weapons
 */

//-------------------------------------------------------------holding
$holds = [
    'carries', 'is holding', 'clenches', 'is equipped with', 
    'is packed with', 'is armed with', 'has', 'hauls', 'lugs',
    'hoists', 'bears', 'clamps', 'clutches', 'clasps', 'holds', 
    'is packing', 'is outfitted with', 
    'is loaded with', 'is girded with', 'is steeled with',
    'is fitted out with',
];
$holding = array_rand(array_flip($holds), 1);

//------------------------------------------------------------------weapon
$weapons = [
    "club", "mace", "scimitar", "dagger", "short sword", "long sword", "bow",
    "crossbow", "axe", "hatchet", "warhammer", "great sword", "javelin",
    "spear", "glaive", "quarterstaff", "throwing axe",
    "knife", "rapier", "whip","battleaxe","messer", "halberd", "lance", 
    "heavy crossbow", "hand crossbow", "blowgun", "boomerang", "couple of darts", 
    "flail", "greataxe","greatclub","light hammer", "longbow",
    "maul", "morningstar", "pike", "shortbow", "sickle",
    "sling", "trident", "war pick",
];
$weapon = array_rand(array_flip($weapons), 1);