<?php
 /*
    Changeling
    Changeling names are very short, with 2 syllable names being an exception, 
    and 1 syllable names being the norm.
    */
if ($hasEyes > 3) {
    $eyes = "large colorless eyes circled by thick black rings";
}



$lastnames1 = [
    'B','C','D','F','G','H','J','K','L','M','N','P',
    'Q','R','S','T','V','W','X','Z',
    ];
    $lastname1 = array_rand(array_flip($lastnames1), 1);
$lastnames2 = [
        'a','e','i','o','u','y',
        'au','ou','oe','ee','aa','ea','eo','ie','ei',
        'ai','oi','ui','uu','ua','uo',
        'oo','ae','io',
        ];
    $lastname2 = array_rand(array_flip($lastnames2), 1);
$lastnames3 = [
'b','c','d','f','g','h','k','l','m','n','p',
'r','s','t','v','w','x','z','ch','rt','ts',
 'kt','st','ts','sk','rx','gs','ks','gz','chs','tk',
 'ps','px','gg','kk','wn','cht','dt',
            ];
        $lastname3 = array_rand(array_flip($lastnames3), 1);
        $firstname = '';
$lastname = $lastname1.$lastname2.$lastname3;
$nickname = $lastname;
$divergencies = [
"Passer, a changeling who wishes to fit in with conventional society
         and live life in only one form or at least suppress the 
         shape-changing ability to better fit in with the society.",
"Becomer, $heshe believe that to be a changeling is to possess many different
         shapes and often different identities and lives altogether. This becomer 
         takes the concept of a dual life to a whole new degree and  
         successfully lives as several 'different people'.",
"Seeker or 'reality seeker', and is convinced that a great truth exists 
        which only the changelings can discover; $heshe suppresses $hisher 
        shapechanging abilities and prefers to live or socialize with other 
        changelings.",
];
$divergencie = array_rand(array_flip($divergencies), 1);
$divergence = $lastname ." is a ".$divergencie;