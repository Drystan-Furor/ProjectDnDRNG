<?php
 /** 
  Gender Vars and Person Vars
  */
// Gender RNG
//------------------------------------------------------gender vars
$homebrew = false;
$rnggender = rand(1, 2);
if ($rnggender == 1) {
    $gender = 'male';
    $thisGender = 'man';
    $heshe = 'he';
    $hisher = 'his';
} else {
    $gender = 'female';
    $thisGender = 'woman';
    $heshe = 'she';
    $hisher = 'her';
}