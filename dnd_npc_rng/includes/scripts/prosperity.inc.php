<?php
/**
 Rng how wealthy one is, generate wardrobe array's on Boolean
 */
$beggar = false;
$poor = false;
$prosperous = false;
$rich = false;
$loaded = false;

$wealthiness = rand(1, 100);
switch ($wealthiness) {
case $wealthiness >= 1 && $wealthiness <= 10: //10% homeless
    $beggar = true;
    break;
case $wealthiness >= 11 && $wealthiness <= 40: //29% poor
    $poor = true;
    break;
case $wealthiness >= 71 && $wealthiness <= 89: //18% rich
    $prosperous = true;
    break;
case $wealthiness >= 71 && $wealthiness <= 89: //18% rich
    $rich = true;
    break;
case $wealthiness >= 90 && $wealthiness <= 100: //10% noble
    $loaded = true;
    break;
default : 
    $prosperous = true;
    break;
}