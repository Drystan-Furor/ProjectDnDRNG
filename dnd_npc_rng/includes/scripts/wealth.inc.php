<?php

/** 
 Describe outfit, get items from array wardrobes
 */
//------------------------------------------------------beggar
if ($beggar == true) {
    $clasping = [
        'clasps', 'clutches', 'clenches', 'holds', 'wears', 'is holding', 
         'thightly squeezing', 'is caressing','fiddling with',
    ];
    $clasps = array_rand(array_flip($clasping), 1);

    $wealthinessTypes = [
        'who seems to be homeless.','that looks like a beggar.',
        'who looks wretched.', 'that looks really squalid.',
        'a genuine panhandler.','a scrounger at best.',
        'who is regarded as a deadbeat.','who looks like a real hobo.',
    ];
    $wealth = array_rand(array_flip($wealthinessTypes), 1);

    $clothbase = " At a glance you see the " .$thisGender. 
    " wears a damaged and dirty " . $clothbase1 . " and 
    a partially torn " .$belt. " around $hisher waist. 
    The $thisGender wears $hat on $hisher head. 
    Feet covered with shabby " . $shoe . ". 
    The $thisGender  ".$clasps." " .$ring. ". ";
}

//------------------------------------------------------poor
if ($poor == true) {
    $wealthinessTypes = [
        'who looks rather poor.',
        'who seems to be penniless.','that looks quite impoverished.',
        'who recently became bankrupt.',' looking poverty-stricken at best.',
        'who looks underpriviliged.','who makes a down-and-out impression.',
    ];
    $wealth = array_rand(array_flip($wealthinessTypes), 1);

    $clothbase = " In a flash you notice the " . $thisGender . " wears a "  
    . $clothbase2 ." that has " . $sleeve . ", and " . $belt . 
    " around $hisher waist. Feet covered with " . $shoe .
    ". On one of $hisher fingers you see " . $ring. ". ";
}

//------------------------------------------------------prosperous
if ($prosperous == true) {
    $wealthinessTypes = [
        'who seems to have some coin.',
        'who looks rather comfortable.',
        'who seems to be fortunate.','that looks a bit prospering.',
        'who recently became upper-class.',' looking affluent at best.',
        'who looks priviliged.','who seems to be doing well.',
    ];
    $wealth = array_rand(array_flip($wealthinessTypes), 1);

        $clothbase = " At first sight the " . $thisGender . 
        " wears a " . $clothbase3 . 
        " with " . $clothingextra . " that has " . $sleeve .
        ". The $thisGender wears $hat on $hisher head" .
        ". Finished with " .
        $belt . " around $hisher waist. Feet covered with " . $shoe . 
        ". The light reflects on a " . $jewel . ". ";
}

//------------------------------------------------------rich
if ($rich == true) {
    $wealthinessTypes = [
        'who looks quite wealthy.',
        'who looks very comfortable.',
        'who seems to be blooming.','that looks "in the money".',
        'who recently became flourishing.',' looking halcyon at best.',
        'who looks well-off.','who seems to be on top of the heap.',
    ];
    $wealth = array_rand(array_flip($wealthinessTypes), 1);

    $clotharray = rand(1, 2);
    if ($clotharray == 1) {
            $clothbase = " In a fleeing look you see the " . $thisGender . 
            " wears a " . $clothbase3 . 
            " featuring " . $clothwealthy .
            " with " . $clothingextra . 
            ". Completed with " .
            $belt . " around $hisher waist. Feet covered with " . $shoe . 
            " Your notice " . $ring. ". ";
    } else if ($clotharray == 2) {
            $clothbase = " At a gander you note the " . $thisGender . 
            " wears a " . $clothbase4 . 
            " with " . $clothingextra . " that has " . $sleeve .
            ". Feet covered with " . $shoe . 
            ". The $thisGender wears $hat on $hisher head." .
            " Your eye catches a " . $jewel. ". ";
    }
}

//------------------------------------------------------loaded
if ($loaded == true) {
    $wealthinessTypes = [
        'who is unmistakenly of noble herritage.',
        'who looks extremely wealthy.',
        'who looks to have money to burn.',
        'who seems to be lousy rich.','that looks opulent and roaring.',
        'who is rich and flourishing.',' looking truly halcyon and lucky.',
        'who looks positivly thriving.', 'looking aristocratic and dignified.',
        'who seems to be a member of a noble family.',
        'who makes a real aristocratic impression.',
    ];
    $wealth = array_rand(array_flip($wealthinessTypes), 1);

    $clothbase = " Eyeballing the " .  $thisGender .  
    " as $heshe wears a very fine " . $clothbase4 . 
    " featuring " . $clothwealthy .
    ". With " . $clothingextra . " that has " . $sleeve .        
    ". Perfected with " . $belt . ", elegantly around $hisher waist. " .  
    "Feet covered with upscale " . $shoe . 
    ". The $thisGender wears $hat on $hisher head." .
    " Glimmering in the light you see " . $ring. ", extravagant and valuable. ".
    " And $heshe is also adorned with a prestigious, fancy " . $jewel . ". "
    ;
}