<?php

/**
 Arrays of materials - recurring use
 */

//------------------------------------------------------quality
$qualities = [
    'cheap', 'affordable', 'quality', 'expensive quality',
];
//$quality = array_rand(array_flip($qualities), 1);

//------------------------------------------------------metals
$metals = [
    'silver', 'gold', 'bronze',
    'steel', 'copper', 'platinum',
    'iron',
];
$metal = array_rand($metals, 7);
//$metal = array_rand($metals, 7);
// $metals[$metal[$i]]
//$var = array_rand(array_flip($metals), 1);

$platemetals = [
    'lead', 'tin', 'copper', 'steel', 'cast-iron',
    'iron', 'metal', 'darkwood', 'stone', 'rock',
];

$enameling = [ //-------------------------------------------enameled with
    'bronze', 'silver', 'platinum', 'gold', 'chrome', 'glass',
];
//$enamel = array_rand(array_flip($enameling), 1);

//----------------------------------------------------------WOOD
$carpenterswood = [ // organic
    'Oak', 'Pine', 'Beech', 'Birch', 'Cherry', 'Elm', 'Hawthorn', 'Juniper',
    'Mahogany', 'Maple', 'Poplar', 'Willow', 'Spruce', 'Chestnut', 'Fir',
    'Cypress', 'Redcedar', 'Hemlock',
];


$maintenances = [ //--------------------------------------------------------UPKEEP
    'clean and slick', 'rusted', 'moldy', 'oxidated', 'clean',
    'damaged', 'shining', 'smooth', 'big', 'dented', 'flawed', 'dirty', 
    'stained', 'filthy', 'greasy', 'begrimed', 'smudged', 'squalid', 'corroded', 
    'disheveled', 'grimey', 'well maintained','bloodstained','unkempt',
];

//------------------------------------------------------observations
$observations = [
    'see', 'clearly notice', 'cautiously observe', 'simply spot', 'behold',
    'distinguish from a distance', 'discern',
    'glimpse', 'mark', 'catch a glimpse that', 'catch sight', 'make out',
    'take notice', 'survey',
];
//$observe = array_rand($observations, 3);
$indicators = [
    'indicates', 'connotes', 'denotes', 'hints', 'implies', 'suggests',
    'implies', 'symbolizes', 'specifies', 'reveals', 'proves', 'attests',
];
//$indicates = array_rand(array_flip($indicators), 1); 

//--------------------------------------------------------------------------------shoes
$shoeMaterials = [
    'goat hide', 'cow hide', 'leather', 'felt',
];


$shoeTypes = [
    'simple shoes',
    'heavy boots',
    'shoes',
    'boots',
    'long, pointy shoes',
    'sandals',
];

$shoeType = array_rand(array_flip($shoeTypes), 1);
$shoeMaterial = array_rand(array_flip($shoeMaterials), 1);



$shoes = [
    $shoeType . " made of " . $shoeMaterial,
    "boots (called botes) held on with straps",
    "clogs with wood soles, that are strapped on to boot-like overshoes",
    "basts, which are made of woven tree bark",
    "rope soled shoes",
    "clogs",
];


//-------------------------------------------------------------------------------hats

$hattextiles = [
    "leather", "felt", "cotton", "wool", "straw", "linen", "knitted", "fur",
];
//$hattextile = array_rand(array_flip($hattextiles), 1);

$hatTypes = [
    'cap', 'hat', 'beanie', 'hood', 'fedora', 'bowler', 'sombrero', 'beret',
    'skullcap', "tam o'shanter", 'fez', 'oesjanka', 'hood',
];
//$hatType = array_rand(array_flip($hatTypes), 1);


//-------------------------------------------------------------------------lengths
$lenghts = [
    'short', 'long', 'cape like', "full", 'wide',
];

//--------------------------------------------------------------------------belts
$numberOf = intval(rand(3, 9));

$beltitems = [
    rand(3, 9) . ' small bottles',
    rand(2, 6) . ' throwing daggers',
    rand(4, 12) . ' throwing darts',
    rand(2, 5) . ' vials with red liquid',
    rand(2, 5) . ' small pouches', 
    rand(10, 20) . ' feet of rope', 
    'a book','a purse','a large tome', 'a small knife',
    'a sash', 'some lockpicks', 'an Abacus', 'a crowbar',
    'a waterskin', 'a hooded lantern', "carpenter's tools",
    'a cylindrical leather case', 'a grappling hook', "a healer's kit",
    'a magniffying glass', 'a leather-bound tome',
    'a spyglass', 'a dangling censer', 'a drinking horn',
    'an iron flask', 'a boomerang', 'ten pouches',
];
//$beltitem = array_rand($beltitems, 5);

$beltmaterials = [
    'cloth', 'cowhide leather', 'full-grain calfskin leather',
    'braided leather', 'tooled leather', 'suede', 'rope',
    'studded leather',
];
//$beltmaterial = array_rand($beltmaterials, 3);

$beltfashions = [
    'embroidered', 'plain', 'smooth', 'simple',
    'traditional', 'common',
];
//$beltfashion = array_rand($beltfashions, 3);


//-------------------------------------------------------------------------------Jewels
$jewelrytypes = [
    'necklace',
    'necklace with a locket',
    'necklace with a gemstone pendant',
    'chain',
    'ring',
    'locket',
    'bracelet',
    'spiral bracelet',
    'arm cuff',
    'upper arm bracelet',
    'arm band',
    'armlet',
    'bangle',
];
//$jewelrytype = array_rand(array_flip($jewelrytypes), 1);

$gemstones = [
    'stone of Onyx',
    'gem of Emerald',
    'black Sapphire',
    'Sapphire',
    'Diamond',
    'Ruby',
    'garnet of Opal',
    'Pearl',
    'black Pearl',
    'series of pearls',
    'blue Spinel',
    'Turqoise',
    'watery gold piece of Amber',
    'crimson piece of Coral',
    'Tigers-eye',
    'Pyrite',
    'Star rose Quartz',
    'blue Quartz',
    'gray-black Hermatite',
    'dark green Malachite',
    'Sardonyx',
    'Zircon',
    'Jasper',
    'rock of Amethyst',
    'transparent fiery orange Jacinth',
];


//-------------------------------------------------------------------------------rings
$ringcomplexities = [
    'a ', 'a ',
    'a mundane ',
    'a plain ',
    'an intricate ',
    'an uncomplicated ',
    'a simple ',
    'a complex ',
    'a sophisticated ',
    'a baroque ',
    'a refined ',
];
//$ringcomplexity = array_rand(array_flip($ringcomplexities), 1);

$youSee = array_rand(array_flip($observations), 1);
$intros = [
    "At a glance you $youSee the ",
    "At first sight the ",
    "At a gander you $youSee the ",
    "In a flash you $youSee the ",
    "In a fleeting look you $youSee the ",
    "While checking out you $youSee the ",
];
