<?php

/**
 Rng how wealthy one is, generate wardrobe array's on Boolean
 */

//----------------------------------------------------------------------Beggar
if ($beggar == true) {

    $textiles = [
        'hemp', 'coarse wool', 'rags',
    ];
    $textile = array_rand(array_flip($textiles), 1);


    $outfits = [
        'tunic', 'robe', 'garment',
    ];
    $outfit = array_rand(array_flip($outfits), 1);

    $detailoutfits = [
        "hanging loose and undefined,",
        "torn on the edges,",
        "full of holes and cuts,",
    ];
    $detailoutfit = array_rand(array_flip($detailoutfits));

    $clothes = [
        $outfit . " made of " . $textile . ", " . $detailoutfit,
        "hooded " . $textile . " cloak, " . $detailoutfit,
        "functional " . $textile . " " . $outfit,
        "cotton bag " . $detailoutfit,
        "short skirted " . $textile . " tunic",
    ];
    $garb = array_rand(array_flip($clothes), 1);
}



//------------------------------------------------------------------------Poor
if ($poor == true) {

    $textiles = [
        'leather', 'linen', 'cotton',
    ];
    $textile = array_rand(array_flip($textiles), 1);
    $textile2 = array_rand(array_flip($textiles), 1);

    $outfits = [
        'tunic', 'robe', 'garment', "doublet",
    ];
    $outfit = array_rand(array_flip($outfits), 1);


    $clothes = [
        $outfit . " made of " . $textile . ", hanging a bit loose,",
        "hooded  " . $textile . " cloak",
        "functional " . $textile . " " . $outfit,
        "short skirted " . $textile . " tunic",
        "set of simple " . $textile . " clothes",

        $textile . " cote hardie, that buttons in the front to a low waist 
            and is fitted to a " . $textile2 . " bodice,",

        $textile . " " . $outfit .
            " similar to the clothing of the elite but made of cheaper 
                materials with less dye or ornamentation,",

        $textile . " apron",
    ];
    $garb = array_rand(array_flip($clothes), 1);
}



//-------------------------------------------------------------------------------rich
if ($prosperous == true || $rich == true) {

    $wardrobes = [
        'tunic', 'robe', 'costume', 'gown', "doublet", 'cote hardie',
    ];


    $fabrics = [
        'clean', 'plain', 'straightforward', 'classic', 'simple', 'beautiful',
    ];


    $textiles = [
        "silk", "velvet", 'cotton', 'linen',
    ];

    $textile = array_rand(array_flip($textiles), 1);
    $wardrobe = array_rand(array_flip($wardrobes), 1);
    $fabric = array_rand(array_flip($fabrics), 1);




    $clothingtype3 = [
        $fabric . " hooded " . $textile . " cloak",
        $fabric . " " . $textile . " houppelande, a full length robe like garment",
        $wardrobe . ", that buttons in the front to a low waist, 
        and is fitted to a " . $fabric . " bodice,",
        $wardrobe . ", fit closely to the body",
        "Burgundian style " . $wardrobe,
        $fabric . " " . $textile . " " . $wardrobe,

        $wardrobe . " of " . $fabric . " " . $textile,

        $textile . " " . $wardrobe .
            " similar to the clothing of the elite but made of cheaper 
            materials with less dye and ornamentation",

    ];
    $garb = array_rand(array_flip($clothingtype3), 1);
}




//----------------------------------------------------------------------rich/loaded
if ($rich == true || $loaded == true) {

    $wardrobes = [
        'costume', 'gown', "doublet", 'cote hardie',
    ];


    $fabrics = [
        'brocade', 'damask',
    ];


    $textiles = [
        "silk", "velvet",
    ];

    $textile = array_rand(array_flip($textiles), 1);
    $wardrobe = array_rand(array_flip($wardrobes), 1);
    $fabric = array_rand(array_flip($fabrics), 1);


    $clothes = [ // target  wears a 
        $fabric . " " . $textile . " " . $wardrobe . ", fit closely to the body,",
        $fabric . " " . $textile . " hooded cloak",
        "Burgundian style " . $fabric . " " . $textile . " " . $wardrobe,
        "clerical " . $fabric . " " . $textile . " robes",
        "elaborately printed " . $wardrobe . " in " . $fabric . " " . $textile . ",",

        $fabric . " " . $textile . " " . $wardrobe . ", 
        closely following the lines of the body from the 
                shoulder to below the waist",

        $fabric . " " . $textile . " houppelande, a beautiful, 
        full length robe like garment,",
    ];
    $ensemble = array_rand(array_flip($clothes), 1);
}

//-----------------------------------------------------------------all but beggar
if ($beggar == false) {
    $clothingDetails = [ //with 
        "a separate and fuller skirt sewn to the body,",
        "a loose blouse that can be tightly laced,",
        "an overcoat",
        "a garnache, a long cloak,",
        "a bodice sewn to a skirt",
        "the fabric falling in folds into a bell shape,",
        "a low cut V neck that shows a piece of contrasting fabric underneath,",
        "a Gothic style influence, a look that accentuates slenderness and an 
            elongated form,",
        "a vertical color difference with a split vertical dividing line in 
            the center of the body,",
        "a light linen shift underneath,",
        "luxurious fabrics", "a luxurious trim", 
        "beautiful prints and vibrant colors",
        "edges of the outer garments decorated with dagging, edged with 
            loose pieces of fabric that resembled leaves,",
        "the highest quality textiles",
        
    ];
    $clothingDetail = array_rand(array_flip($clothingDetails), 1);
}



//-------------------------------------------------------------detailed rich/loaded
$patterns = [
    'woven in',
    'embroided',
    'printed on the fabric',
    'of flowers',
];


$linings = [
    "both warmth and style",
    "warmth",
    "style",
];

$lining = array_rand(array_flip($linings), 1);
$pattern = array_rand(array_flip($patterns), 1);


if ($rich == true || $loaded == true) {
    $richdetails = [
        "designs featuring gimmicky or quirky elements",
        "fur lining thats increasing " . $lining,
        "interwoven golden thread for a shimmering effect",
        "ornate and wildly ostentatious designs",
        "patterns and designs " . $pattern,
        "bureaucratic sigils of office dangling from the neck.",
    ];
    $richDetail = array_rand(array_flip($richdetails), 1);
}



//-------------------------------------------------------------------------sleeves

$sleeveLength = array_rand(array_flip($lenghts), 1);

$sleeves = [
    $sleeveLength . " sleeves widened toward a bell shape",
    "a high collar and " . $sleeveLength . " sleeves",
    "full sleeves tightened at the wrist",
    $sleeveLength . " sleeves that end at the elbow",
    "no sleeves",
    $sleeveLength . " sleeves",
    "slashings in the sleeves that show the under tunic",
];
$sleeve = array_rand(array_flip($sleeves), 1);




//--------------------------------------------------------------------------belts

$beltfashion = array_rand($beltfashions, 3);
$beltmaterial = array_rand($beltmaterials, 3);
$beltitem = array_rand($beltitems, 3);
$metal = array_rand($metals, 2);

$belts = [ //belt + buckle
    $beltfashions[$beltfashion[0]] . " " . $beltmaterials[$beltmaterial[0]] . " 
            belt with a " . $metals[$metal[1]] . " buckle",
    //belt + item
    $beltfashions[$beltfashion[0]] . " " . $beltmaterials[$beltmaterial[0]] . " belt
        with " . $beltitems[$beltitem[0]] . " strapped to it",
    //belt + 2 items
    $beltfashions[$beltfashion[0]] . " " . $beltmaterials[$beltmaterial[0]] . " belt
        with " . $beltitems[$beltitem[0]] . " and " . $beltitems[$beltitem[1]] . " 
        strapped to it",
    // belt + 3 items
    $beltfashions[$beltfashion[0]] . " " . $beltmaterials[$beltmaterial[0]] . " belt
        used to hold  " . $beltitems[$beltitem[0]] . ",  " . $beltitems[$beltitem[1]] . "
        and  " . $beltitems[$beltitem[2]],
    //belt + item && belt 2 + item
    $beltfashions[$beltfashion[0]] . " " . $beltmaterials[$beltmaterial[0]] . " belt
        with " . $beltitems[$beltitem[0]] . " strapped to it and another "
        . $beltfashions[$beltfashion[1]] . " " . $beltmaterials[$beltmaterial[1]] . " 
        belt holding " . $beltitems[$beltitem[1]],
    // buckled belt
    $metals[$metal[1]] . " buckled " . $beltfashions[$beltfashion[0]] . " 
    " . $beltmaterials[$beltmaterial[0]] . " belt",

    //BANDOLIERS
    $beltfashions[$beltfashion[0]] . " " . $beltmaterials[$beltmaterial[0]] . " 
        bandolier with " . $beltitems[$beltitem[0]] . ", " . $beltitems[$beltitem[2]] . "
         and " . $beltitems[$beltitem[1]] . " attached to it",
    //belt + item && bandolier + 2 item
    $beltfashions[$beltfashion[0]] . " " . $beltmaterials[$beltmaterial[0]] . " belt
        holding " . $beltitems[$beltitem[0]] . " and a " . $beltfashions[$beltfashion[1]] .
        " " . $beltmaterials[$beltmaterial[1]] . " bandolier with a "
        . $metals[$metal[1]] . " buckle holding "
        . $beltitems[$beltitem[1]] . " and " . $beltitems[$beltitem[2]],
];
$belt = array_rand(array_flip($belts), 1);





//----------------------------------------------------------------------------shoes
$feetCovers = [
    'Feet covered with ',
    'Feet protected by ',
    'Feet fitted with ',
];

$feetCover = array_rand(array_flip($feetCovers), 1);
$shoe = array_rand(array_flip($shoes), 1);




//-------------------------------------------------------------------------------hats
$wearshat = rand(1, 20);
if ($wearshat > 15) {
    $headdress = "";
} else {



    $hattextile = array_rand(array_flip($hattextiles), 1);
    $hatType = array_rand(array_flip($hatTypes), 1);

    $hats = [ //  wears
        "a wimple, a piece of cloth worn over the head and around the face and neck",
        "a $hattextile sugar loaf hat: a tallish, conical hat that resembles an 
        inverted flower pot",
        "a $hattextile flat mortar board type hat, people associate 
        with graduation,",
        "a chaperon, a $hattextile hood that is sewn onto a cape",
        "a $hattextile hood grown with extra fabric and slightly 
            longer than necessary",
        "a tall $hattextile conical hat worn tilted at the back of the head",
        "a " . $hattextile . " " . $hatType,
    ];
    $hat = array_rand(array_flip($hats), 1);
}


//-------------------------------------------------------------------------------Jewels
$jewelmaterial = array_rand(array_flip($metals), 1);
$jewelrytype = array_rand(array_flip($jewelrytypes), 1);
$jewelgemstone = array_rand(array_flip($gemstones), 1);

$jewel = $jewelmaterial . " " . $jewelrytype .
    " set with a " . $jewelgemstone;

//-------------------------------------------------------------------------------rings

$ringcomplexity = array_rand(array_flip($ringcomplexities), 1);
$ringGemstone = array_rand(array_flip($gemstones), 1);
$ringMaterial = array_rand(array_flip($metals), 1);

$ringType = $ringcomplexity . $ringMaterial;
$isSignetRing = rand(1, 20);
if ($isSignetRing > 15) {
    $ringType = $ringcomplexity . $ringMaterial . " signet";
}
$ring = $ringType .  " ring set with a " . $ringGemstone;